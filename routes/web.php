<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/homec', [App\Http\Controllers\HomeController::class, 'index'])->name('homec');
Route::get('/productos/compra', [App\Http\Controllers\ProductosController::class, 'compra'])->name('compra');
Route::post('/productos/comprar', [App\Http\Controllers\ProductosController::class, 'comprar'])->name('comprar');

Route::resource('productos', App\Http\Controllers\ProductosController::class);
Route::resource('tproductos', App\Http\Controllers\TipoProdController::class);