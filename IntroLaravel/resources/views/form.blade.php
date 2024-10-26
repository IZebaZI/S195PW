@extends('template')
@section('titulo', 'Formulario')

@section('content')
<!-- Formulario -->
<div class="container col-5 mt-5">
    @if (session('exito'))
        <x-alert type="success">{{session('exito')}}</x-alert>
    @endif

    @session ('exito')
        <x-alert type="success">{{$value}}</x-alert>
    @endsession
    
    @session ('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: '{{$value}}',
                icon: "success"
            });
        </script>
    @endsession

    <div class="card text-center">
        <div class="card-header">
            Registro de Clientes
        </div>
        
        <div class="card-body">
            <form action="/enviar" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre" placeholder="">
                    <small class="text-danger fst-italic">{{$errors->first('txtnombre')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido" placeholder="">
                    <small class="text-danger fst-italic">{{$errors->first('txtapellido')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="text" class="form-control" name="txtcorreo" placeholder="">
                    <small class="text-danger fst-italic">{{$errors->first('txtcorreo')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" name="txttelefono" placeholder="">
                    <small class="text-danger fst-italic">{{$errors->first('txttelefono')}}</small>
                </div>
        </div>

        <div class="card-footer text-body-secondary d-flex flex-column">
            <button type="submit" class="btn btn-success">Generar Cliente</button>
        </div>
            </form>
    </div>
</div>
@endsection