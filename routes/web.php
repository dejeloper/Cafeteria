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
Route::post('/productos', [ProductsController::class, 'store'])->name('products.store'); 
