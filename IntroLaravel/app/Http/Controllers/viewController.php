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

    public function components(){
        return view('components');
    }

    public function processClient(Request $request){
        // return 'Cliente procesado';

        // Imprime tofo lo que viene en la petición
        return $request->all();

        // Devuelve la ruta de la petición
        // return $request->path();

        // Imprime la url completa de la petición
        // return $request->url();

        // Muestra la ip origen de la petición
        // return $request->ip();
    }
}
