@extends('template')
@section('titulo', 'Clientes')

@section('clients')

@session ('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: '{{$value}}',
                icon: "success"
            });
        </script>
@endsession
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
            <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal{{$cliente->id}}">{{__('Actualizar')}}</button>
            <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deleteModal{{$cliente->id}}">{{__('Eliminar')}}</button>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario: {{$cliente->nombre}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <form action="{{route('editClient', ['id'=>$cliente->id])}}" method="POST">
            </div>
            <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}:</label>
                    <input type="text" class="form-control" name="txtnombre{{$cliente->id}}" placeholder="" value="{{$cliente->nombre}}">
                    <small class="text-danger fst-italic">{{$errors->first('txtnombre'.$cliente->id)}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}:</label>
                    <input type="text" class="form-control" name="txtapellido{{$cliente->id}}" placeholder="" value="{{$cliente->apellido}}">
                    <small class="text-danger fst-italic">{{$errors->first('txtapellido'.$cliente->id)}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}:</label>
                    <input type="text" class="form-control" name="txtcorreo{{$cliente->id}}" placeholder="" value="{{$cliente->correo}}">
                    <small class="text-danger fst-italic">{{$errors->first('txtcorreo'.$cliente->id)}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Teléfono')}}:</label>
                    <input type="text" class="form-control" name="txttelefono{{$cliente->id}}" placeholder="" value="{{$cliente->telefono}}">
                    <small class="text-danger fst-italic">{{$errors->first('txttelefono'.$cliente->id)}}</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambio</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('deleteClient', ['id'=>$cliente->id])}}" method="POST">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario: {{$cliente->nombre}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que deseas eliminar el usuario {{$cliente->nombre}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection