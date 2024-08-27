<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
 
Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[CategoryController::class,'index']);
Route::resource('categories', CategoryController::class);
// Route::resource('admin/crud-products', [ProductController::class,"index"]);
Route::resource('products', ProductController::class);
