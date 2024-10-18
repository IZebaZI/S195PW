<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\repasoController;

Route::get('/', function () {
    return view('welcome');
})->name('portada');

Route::get('/repaso1', [repasoController::class, 'repaso'])->name('repaso');
Route::post('/resultados', [repasoController::class, 'calcular'])->name('resultados');