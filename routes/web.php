<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

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

Route::get('/', [ProductoController::class, 'index'])->name('/');
Route::get('curso',[ProductoController::class, 'curso' ])->name('curso');
Route::get('ebook',[ProductoController::class, 'ebook' ])->name('ebook');
Route::get('plantilla',[ProductoController::class, 'plantilla' ])->name('plantilla');
Route::get('producto/detalle/{nombre}', [ProductoController::class, 'show'])->name('detalleproducto');
Route::get('carrito', [CarritoController::class, 'mostrar'])->name('carritomostrar');
Route::post('agregarcarrito', [CarritoController::class, 'agregar'])->name('carrito.agregar');
