@extends('template')
@section('titulo', 'Clientes')

@section('clients')
<!-- Tabla -->
<div class="container mt-5 col-md-8">
    <div class="card text-justify">
        <div class="card-header fs-5 text-primary">
            Ivan Isay
        </div>
        <div class="card-body">
            <h5 class="fw-bold">ivan.guerra@outlook.com</h5>
            <h5 class="fw-medium">4424283836</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-info">Actualizar</button>
            <button type="submit" class="btn btn-warning">Eliminar</button>
        </div>
    </div>
</div>
@endsection