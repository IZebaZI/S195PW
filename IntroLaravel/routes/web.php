<?php

use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/URL', 'nombre_vista');-name('nombre_ruta');

// Route::view('/', 'welcome')->name('welcome');

// Route::view('/formulario', 'form')->name('form');

// Route::view('/consulta-clientes', 'clients')->name('clients');

// Route::view('/componentes', 'components')->name('components');

// Route::get('/formulario', [viewController::class, 'form'])->name('form');


// CLIENT CONTROLLER ROUTES
Route::get('/', [clientController::class, 'home'])->name('welcome');
Route::get('/componentes', [clientController::class, 'components'])->name('components');
Route::get('/clientes/create', [clientController::class, 'create'])->name('form');
Route::get('/clientes/index', [clientController::class, 'index'])->name('clients');
Route::post('/clientes/store', [clientController::class, 'store'])->name('processClient');
Route::post('/clientes/update/{id}', [clientController::class, 'update'])->name('editClient');
Route::post('/clientes/delete/{id}', [clientController::class, 'destroy'])->name('deleteClient');