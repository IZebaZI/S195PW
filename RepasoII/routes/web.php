<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main')->name('main');

Route::view('/registar-libro', 'form')->name('form');