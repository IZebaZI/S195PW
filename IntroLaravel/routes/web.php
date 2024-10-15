<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/URL', 'nombre_vista');-name('nombre_ruta');

// Route::view('/', 'welcome')->name('welcome');

// Route::view('/formulario', 'form')->name('form');

// Route::view('/consulta-clientes', 'clients')->name('clients');

// Route::view('/componentes', 'components')->name('components');

Route::get('/', [viewController::class, 'home'])->name('welcome');

Route::get('/formulario', [viewController::class, 'form'])->name('form');

Route::get('/consulta-clientes', [viewController::class, 'consulta'])->name('clients');

Route::get('/componentes', [viewController::class, 'components'])->name('components');

Route::post('/enviar', [viewController::class, 'processClient'])->name('processClient');