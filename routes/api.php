<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Rutas Productos
Route::get('/products',[ProductController::class, 'index'])->name('product.index.Api');
Route::get('/products/{id}',[ProductController::class, 'show'])->name('product.show.Api');
Route::post('/products',[ProductController::class, 'store'])->name('product.store.Api');
Route::put('/products/{id}',[ProductController::class, 'update'])->name('product.update.Api');
Route::delete('/products/{id}',[ProductController::class, 'destroy'])->name('product.destroy.Api');

//Rutas Ordenes
Route::get('/orders',[OrderController::class, 'index'])->name('order.index.Api');
Route::get('/orders/{id}',[OrderController::class, 'show'])->name('order.show.Api');
Route::post('/orders',[OrderController::class, 'store'])->name('order.store.Api');
Route::put('/orders/{id}',[OrderController::class, 'update'])->name('order.update.Api');
Route::delete('/orders/{id}',[OrderController::class, 'destroy'])->name('order.destroy.Api');