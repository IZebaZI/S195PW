<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    
    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>
    
    <div class="container col-md-5">
        
        <form action="/registrar" method="GET">
            @session('success')
                <div class="alert alert-success">{{$value}}</div>   
            @endsession
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nombre: </label>
                <input type="text" class="form-control" name='txtNombre' value="{{old('txtNombre')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtNombre')}}</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Sabor(s): </label>
                <input type="text" class="form-control" name="txtSabor" value="{{old('txtSabor')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtSabor')}}</small>
            </div>                

            <div class="mb-3">
                <label  class="form-label">Peso: </label>
                <input type="text" class="form-control"  name="txtPeso" value="{{old('txtPeso')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtPeso')}}</small>
            </div>

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
    </form>
</div>

</body>
</html>