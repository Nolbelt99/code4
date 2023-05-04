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
        $products = Product::paginate(15);
        return view('pruduct.index', compact('products'));
    }

    public function create()
    {
        $categories  = Category::get();
        return view('pruduct.create', compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        $input = $request->all();
        $product = Product::create($input);

        return back()->with('success', 'User created successfully.');
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

        Product::where('id', $id)
            ->update([
                'name' => $validated['name'],
                'price' => $validated['price'],
                'image' => $validated['image'],
                'category_id' => $validated['category_id'],
            ]);

        return redirect()->route('product_edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();
        return redirect()->route('product');
    }
}
