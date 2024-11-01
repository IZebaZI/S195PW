@extends('template')
@section('title', 'Registrar Libro')


@section('content')
<div class="d-flex justify-content-center">
    <div class="card p-3 text-center">
        @session('success')
            <script>alertify.alert('Registro Exitoso','{{$value}}');</script>
        @endsession
        <form action="/registrando-libro" method="GET">
            @csrf
            <p class="fs-4 mb-2 text-danger">Formulario: Registrar Libro</p>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">ISBN</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intISBN">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">Título</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtTitulo">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">Autor</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtAutor">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">Páginas</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intPaginas">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">Año</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intAnio">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1">Editorial</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtEditorial">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email de Editorial</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtCorreo">
            </div>
            <button type="submit" class="btn btn-success">
                Registrar   
            </button>
        </form>
    </div>
</div>
@endsection