<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;


// Route::get('/', function () {
//     return view('form');
// });

Route::get('/', [ControladorFrituras::class, 'formulario'])->name('form');