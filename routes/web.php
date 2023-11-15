<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('producto.inicio');

Route::get('/productos/agregar', [ProductoController::class, 'create'])->name('producto.crear');

Route::post('/productos/guardar', [ProductoController::class, 'store'])->name('producto.store');

Route::get('/ventas', [VentaController::class, 'index'])->name('venta.inicio');

Route::get('/ventas/agregar', [VentaController::class, 'create'])->name('venta.crear');

Route::post('/ventas/guardar', [VentaController::class, 'store'])->name('venta.guardar');


