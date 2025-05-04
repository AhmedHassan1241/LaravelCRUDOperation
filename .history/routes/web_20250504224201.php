<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products',ProductsController::class);
Route::resource('categories',CategoryController::class);

