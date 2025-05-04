<?php

// use App\Http\Controllers\NoteController;
// use App\Http\Controllers\welcomeController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', [welcomeController::class,'index']);
// Route::get('/welcome', [welcomeController::class,'welcome']);
// Route::get("/notes",[NoteController::class,'index']);
// Route::get("/home",function () {
// return "this is home page";
// })->name("home");

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return "Hello Laravel!";
});
Route::get("/", [HomeController::class, 'index']);

Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductsController::class);
Route::middleware(['auth.session'])->group(function(){
    Route::resource('users',UserC)
})
