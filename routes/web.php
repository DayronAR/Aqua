<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('admin/productos', ProductoController::class);
    Route::get('admin/ventas/voucher/{id}', [VentaController::class, 'voucher'])->name('ventas.voucher');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('pedidos', App\Http\Controllers\PedidoController::class);
    Route::resource('ventas', App\Http\Controllers\VentaController::class);
    Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
});

require __DIR__.'/auth.php';
