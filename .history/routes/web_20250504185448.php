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
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get("/", [HomeController::class, 'index']);

Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductsController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

