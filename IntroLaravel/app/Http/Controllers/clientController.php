<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateClient;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class clientController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function components(){
        return view('components');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $datos = DB::table('clientes')->get();
        return view('clients', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validateClient $request){
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: '.$usuario);
        return to_route('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validateClient $request, string $id){
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'.$id),
            'apellido' => $request->input('txtapellido'.$id),
            'correo' => $request->input('txtcorreo'.$id),
            'telefono' => $request->input('txttelefono'.$id),
            'updated_at' => Carbon::now()
        ]);

        $usuario = $request->input('txtnombre'.$id);
        session()->flash('exito', 'Se guardaron los cambios del usuario: '.$usuario);
        return to_route('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        DB::table('clientes')->where('id', $id)->delete();

        session()->flash('exito', 'Se eliminó correctamente el usuario.');
        return to_route('clients');
    }
}
