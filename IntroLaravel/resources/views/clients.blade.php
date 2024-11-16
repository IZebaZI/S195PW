@extends('template')
@section('titulo', 'Clientes')

@section('clients')
<!-- Tabla -->
@foreach ($datos as $cliente)
<div class="container mt-5 col-md-8">
    <div class="card text-justify">
        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{$cliente->correo}}</h5>
            <h5 class="fw-medium">{{$cliente->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-info">{{__('Actualizar')}}</button>
            <button type="submit" class="btn btn-warning">{{__('Eliminar')}}</button>
        </div>
    </div>
</div>
@endforeach

@endsection