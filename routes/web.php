<?php

use App\Livewire\AdministrarCliente;
use App\Livewire\CrearOrden;
use App\Livewire\CrearProducto;
use App\Livewire\Inicio;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('inicio', Inicio::class)
    ->middleware(['auth'])
    ->name('inicio');

    Route::get('crear-producto', CrearProducto::class)
    ->middleware(['auth'])
    ->name('crear-producto');

    Route::get('administrar-cliente/{usuario}', AdministrarCliente::class)
    ->middleware(['auth'])
    ->name('administrar-cliente');


require __DIR__.'/auth.php';
