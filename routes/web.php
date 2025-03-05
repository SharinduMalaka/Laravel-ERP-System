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
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('products', [ProductController::class, 'index'])->name('products.list');
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



// cart routes

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/view', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('cart/remove/{productID ?}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');



// Define the search route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

Route::get('/products', [ProductController::class, 'index'])->name('products.list');
Route::get('/products/{productID}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product-details/{productDescription}', [ProductController::class, 'details'])->name('products.details');

//category routes
Route::get('/categories', [CategoryController::class, 'ViewAllCategories'])->name('categories');
Route::get('/Category/{id}', [CategoryController::class, 'show'])->name('categories.show');


Route::post('/register', [CustomerController::class, 'register'])->name('register');


require __DIR__.'/auth.php';
