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
@foreach ($clients as $item)
<div class="container mt-5 col-md-8">
    <div class="card text-justify">
        <div class="card-header fs-5 text-primary">
            {{$item->nombre}}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{$item->correo}}</h5>
            <h5 class="fw-medium">{{$item->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <!-- disparadores para la vista Clientes -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list-stars"></i> Opciones
                </button>
                <ul class="dropdown-menu">
                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                        <i class="bi bi-pencil-square"></i>Editar 
                    </button>
                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                        <i class="bi bi-trash"></i> Borrar 
                    </button>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('options')
@endforeach


{{-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <form action="" method="POST">
            </div>
            <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}:</label>
                    <input type="text" class="form-control" name="txtnombre" placeholder="" value="">
                    <small class="text-danger fst-italic">{{$errors->first('txtnombre')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}:</label>
                    <input type="text" class="form-control" name="txtapellido" placeholder="" value="">
                    <small class="text-danger fst-italic">{{$errors->first('txtapellido')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}:</label>
                    <input type="text" class="form-control" name="txtcorreo" placeholder="" value="">
                    <small class="text-danger fst-italic">{{$errors->first('txtcorreo')}}</small>
                </div>
            
                <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Teléfono')}}:</label>
                    <input type="text" class="form-control" name="txttelefono" placeholder="" value="">
                    <small class="text-danger fst-italic">{{$errors->first('txttelefono')}}</small>
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

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que deseas eliminar el usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div> --}}

@endsection