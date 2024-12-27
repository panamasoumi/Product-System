<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home');


Route::get('/products',[ProductController::class, 'index'])
->name(('products.index'));

Route::get('/products/create',[ProductController::class,'create'])
->name( ('products.create'));

Route::post('/products/store', [ProductController::class,'store'])
->name('products.store');

Route::get('/products/{id}',[ProductController::class,'show'])
->name('products.show')
->whereNumber('id');