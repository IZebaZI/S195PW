@extends('template')
@section('titulo', 'Formulario')

@section('content')
<!-- Formulario -->
<div class="container col-5 mt-5">
    <div class="card text-center">
        <div class="card-header">
            Registro de Clientes
        </div>
        
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
            
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
            
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="mail" class="form-control" id="" placeholder="">
                </div>
            
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" id="" placeholder="">
                </div>
        </div>
    
        <div class="card-footer text-body-secondary d-flex flex-column">
            <button type="submit" class="btn btn-success">Generar Cliente</button>
        </div>
            </form>
    </div>
</div>
@endsection