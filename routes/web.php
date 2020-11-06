<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\CheckoutController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BooksController::class, 'home']);

Route::get('/book/{id}', [BooksController::class, 'show']);

Route::post('/cart/add', [ShoppingController::class, 'cart_add']);

Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart');

Route::get('/cart/checkout', [CheckoutController::class, 'index'])->name('cart.checkout');

Route::post('/cart/checkout', [CheckoutController::class, 'pay'])->name('cart.checkout');

Route::get('/cart/delete/{id}', [ShoppingController::class, 'cart_delete'])->name('cart.delete');

Route::get('/cart/incr/{id}/{qty}', [ShoppingController::class, 'incr'])->name('cart.incr');

Route::get('/cart/decr/{id}/{qty}', [ShoppingController::class, 'decr'])->name('cart.decr');


