<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateClient;

class viewController extends Controller
{

    public function processClient(validateClient $request){

        // Validaciones
        // $validacion = $request->validate([
        //     'txtnombre'=>'required|min:3|max:20',
        //     'txtapellido'=>'required',
        //     'txtcorreo'=>'required|email:rfc,dns',
        //     'txttelefono'=>'required|numeric'
        // ]);

        // Redirección con mensaje en sesión
        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: '.$usuario);
        
        //Redirección con nombre de ruta
        return to_route('form');

        // $id = [['usuario'=>1],
        //         ['usuario'=>2]];
                
        // return view('form', compact('id'));

        // Redirección a una ruta
        // return redirect('/');

        // Redirección con nombre de una ruta
        // return redirect()->route('welcome');

        // Redirección al origen de la petición
        // return back();

        // Imprime todo lo que viene en la petición
        // return $request->all();
        
        // Devuelve la ruta de la petición
        // return $request->path();
        
        // Imprime la url completa de la petición
        // return $request->url();
        
        // Muestra la ip origen de la petición
        // return $request->ip();

        // return 'Cliente procesado';
    }
}
