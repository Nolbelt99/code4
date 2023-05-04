<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [DefaultController::class, 'index'])->name('default');
Route::get('/about-us', [DefaultController::class, 'aboutUs'])->name('about_us');
Route::get('/stores', [DefaultController::class, 'stores'])->name('stores');

Route::get('/products', [ProductController::class, 'index'])->middleware(['auth'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show'])->middleware(['auth'])->name('product_show');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/product/create', [ProductController::class, 'create'])->name('product_create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product_store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product_edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product_update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product_destroy');

    Route::get('/categories', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category_create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category_store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category_edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category_update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category_destroy');
});
