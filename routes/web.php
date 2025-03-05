<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
});


//account routes
Route::view('/account', 'account')->name('account');

//auth routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

 

// cart routes
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{productID}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart/update/{productID}', [CartController::class, 'update'])->name('cart.update');

// Define the search route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{productID}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product-details/{productDescription}', [ProductController::class, 'details'])->name('products.details');

//category routes
Route::get('/categories', [CategoryController::class, 'ViewAllCategories'])->name('categories');
Route::get('/Category/{id}', [CategoryController::class, 'show'])->name('categories.show');


Route::post('/register', [CustomerController::class, 'register'])->name('register');


require __DIR__.'/auth.php';
