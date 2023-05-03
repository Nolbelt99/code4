<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::paginate(3);

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $input = $request->all();
        $user = Category::create($input);
        return back()->with('success', 'User created successfully.');

        return redirect()->route('category_show', ['id' => 1]);
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('category.edit', compact('category'));
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $validated = $request->all();

        Category::where('id', $id)
            ->update([
                'name' => $validated['name']
            ]);

        return redirect()->route('category_edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)->delete();
        return redirect()->route('category');
    }

}