<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\repasoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/repaso1', [repasoController::class, 'repaso'])->name('repaso');