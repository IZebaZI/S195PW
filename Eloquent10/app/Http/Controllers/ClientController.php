<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = client::all();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addClient = new client();
        $addClient->nombre = $request->input('txtnombre');
        $addClient->apellido = $request->input('txtapellido');
        $addClient->correo = $request->input('txtcorreo');
        $addClient->telefono = $request->input('txttelefono');

        $addClient->save();

        $msg = $request->input('txtnombre') . ' ' . $request->input('txtapellido') . ' ha sido registrado exitosamente';
        session()->flash('message', $msg);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        $editClient = client::find($client->id);
        $editClient->nombre = $request->input('nombre');
        $editClient->apellido = $request->input('apellido');
        $editClient->correo = $request->input('correo');
        $editClient->telefono = $request->input('telefono');
        $editClient->save();

        $msg = 'El usuario ha sido editado exitosamente';
        session()->flash('message', $msg);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $deleteClient = client::find($client->id);
        $deleteClient->delete();

        $msg = 'El usuario ha sido eliminado exitosamente';
        session()->flash('message', $msg);
        return redirect()->back();
    }
}
