<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::resource('Products', ProductsController::class);


Route::get('/', function () {
    return view('welcome');
});
