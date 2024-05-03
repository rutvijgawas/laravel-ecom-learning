<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('search', [ProductController::class, 'search'])->name('search');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
Route::get('order-now', [OrderController::class, 'orderNow'])->name('order-now');
Route::post('place-order', [OrderController::class, 'placeOrder'])->name('place-order');
Route::get('my-orders', [OrderController::class, 'myOrders'])->name('my-orders');
Route::get('cancel-orders/{id}', [OrderController::class, 'cancelOrder'])->name('cancel-orders');