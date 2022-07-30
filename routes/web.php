<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderControllerWeb;
use App\Http\Controllers\ProductControllerWeb;

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

Route::get('/',[ProductControllerWeb::class, 'index'])->name('product.index.Web');

Route::post('/',[OrderControllerWeb::class, 'store'])->name('order.store.Web');

