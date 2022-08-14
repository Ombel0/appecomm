<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;

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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/boutique', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/boutique /{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');




Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'store'])->name('carts.store');

Route::get('/emptycart', function () {
  Cart::destroy();
});
