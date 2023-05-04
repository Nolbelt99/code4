<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();

        if ($request->has('name') && $request->input('name') != null) {
            $products->where('name', 'like', '%'.$request->input('name').'%');
        }
        if ($request->has('category') && $request->input('category') != null) {
            $products->where('category_id', $request->input('category'));
        }

        $filters = $request->all();
        $categories  = Category::orderBy('name')->get();
        $products = $products->orderBy('name')->paginate(15);

        return view('pruduct.index', compact('products', 'filters', 'categories'));
    }

    public function create()
    {
        $categories  = Category::orderBy('name')->get();
        return view('pruduct.create', compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $filename);
        $input = $request->all();
        $input['image'] = $filename;
        $product = Product::create($input);

        return redirect()->route('product_edit', ['id' => $product->id])->with('message', 'Sikeres termék létrehozás.');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $categories  = Category::get();

        return view('pruduct.edit', compact('product', 'categories'));
    }

    public function update(ProductStoreRequest $request, $id)
    {
        $validated = $request->validated();

        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $filename);

        Product::where('id', $id)
            ->update([
                'name' => $validated['name'],
                'price' => $validated['price'],
                'image' => $filename,
                'category_id' => $validated['category_id'],
            ]);

        return redirect()->route('product_edit', ['id' => $id])->with('message', 'Sikeres módosítás.');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();
        return redirect()->route('product')->with('message', 'Sikeres törlés.');
    }
}
