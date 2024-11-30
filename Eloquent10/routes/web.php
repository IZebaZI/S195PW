<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::view('/', 'welcome')->name('welcome');
Route::resource('clients', ClientController::class);