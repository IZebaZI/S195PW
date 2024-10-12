<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function form(){
        return view('form');
    }

    public function consulta(){
        return view('clients');
    }
}
