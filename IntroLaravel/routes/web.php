<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/URL', 'nombre_vista');-name('nombre_ruta');

Route::view('/', 'welcome')->name('welcome');

Route::view('/formulario', 'form')->name('form');

Route::view('/consulta-clientes', 'clients')->name('clients');

Route::view('/componentes', 'components')->name('components');