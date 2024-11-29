<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('welcome');
Route::view('/formulario', 'form')->name('form');
Route::view('/consulta-clientes', 'clients')->name('clients');
Route::view('/componentes', 'components')->name('components');
Route::view('/formulario', 'form')->name('form');