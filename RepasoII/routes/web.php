<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;
use App\Http\Controllers\viewsController;

Route::get('/', [viewsController::class, 'main'])->name('main');
Route::get('/registrar-libro', [viewsController::class, 'form'])->name('form');

Route::get('/registrando-libro', [booksController::class, 'store'])->name('addBook');