<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateBook;

class booksController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(validateBook $request)
    {
        $ISBN = $request->input('intISBN');
        $titulo = $request->input('txtTitulo');
        $autor = $request->input('txtAutor');
        $paginas = $request->input('intPaginas');
        $anio = $request->input('intAnio');
        $editorial = $request->input('txtEditorial');
        $correo = $request->input('txtCorreo');
        
        session()->flash('success', $titulo);

        return to_route('form');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
