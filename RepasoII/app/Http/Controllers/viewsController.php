<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function main(){
        return view('main');
    }

    public function form(){
        return view('form');
    }
}
