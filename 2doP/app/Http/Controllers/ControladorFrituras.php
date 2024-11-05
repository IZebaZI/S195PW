<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateFritura;

class ControladorFrituras extends Controller{
    
    public function formulario(){
        return view('formFrituras');
    }
    
    public function registrar(validateFritura $request){
        $nombre = $request->input('txtNombre')
    }

}
