<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        return view('pruduct.index', compact('products'));
    }

    public function create()
    {
        return view('pruduct.create');
    }

    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('product_show', ['id' => 1]);
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('pruduct.edit', compact('product'));
    }

    public function update(ProductStoreRequest $request, $id)
    {
        $validated = $request->validated();

        Product::where('id', $id)
            ->update([
                'name' => $validated['name']
            ]);

        return redirect()->route('product_show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->delete();
        return redirect()->route('product');
    }

}
