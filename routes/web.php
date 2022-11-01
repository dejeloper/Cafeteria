<?php

use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('inventario.index');
// })->name('inicio');


Route::get('/productos', [ProductsController::class, 'index'])->name('products.index');
Route::get('/productos/add', [ProductsController::class, 'add'])->name('products.add');
Route::post('/productos', [ProductsController::class, 'store'])->name('products.store');
Route::get('/productos/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::patch('/productos/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/productos/{id}', [ProductsController::class, 'destroy'])->name('products.delete');
