<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\CategoryController;

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

Route::resource('categories', CategoryController::class);

Route::controller(ProductController::class)
->prefix('products')
->name('products.')
->group(function() { 

    Route::get('/','index')
    ->name('index');

    Route::get('/create','create')
    ->name( 'create');

    Route::post('/store','store')
    ->name('store');

    Route::get('/{product}','show')
    ->name('show');

    Route::get('/{product}/edit','edit')
    ->name('edit');

    Route::patch('/{product}','update')
    ->name('update');

    Route::delete('/{product}','delete')
    ->name('delete');

});