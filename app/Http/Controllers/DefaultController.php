<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->paginate(10);
        return view('home', compact('products'));
    }
}
