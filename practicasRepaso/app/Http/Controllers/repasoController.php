<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repasoController extends Controller
{
    public function repaso(){
        return view('repaso1');
    }

    public function calcular(Request $request){
        $input = $request -> input;
        $select = $request -> select;
        
        if ($input){
            switch ($select){
                case '1':
                    $resultado = $input.' MB'.' son '.($input/1024).' GB';
                    break;
                case '2':
                    $resultado = $input.' GB'.' son '.($input*1024).' MB';
                    break;
                case '3':
                    $resultado = $input.' GB'.' son '.($input/1024).' TB';
                    break;
                case '4':
                    $resultado = $input.' TB'.' son '.($input*1024).' GB';
                    break;
                default:
                    $resultado = 'Error';
            }
            return view('repaso1', ['resultado' => $resultado, 'select' => $select]);
        }else{
            return view('repaso1', ['resultado' => 'Error']);
        }
    }
}