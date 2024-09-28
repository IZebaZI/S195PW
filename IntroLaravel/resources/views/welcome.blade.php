<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Bienvenida</title>
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="text-center">
            <p class="fs-1">¡Bienvenido Querido Turista!</p>
        </div>
        <div class="text-center">
            <p class="fs-5">Presiona el botón para iniciar...</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{route('form')}}"><button type="submit" class="btn btn-info">¿Comenzamos?</button></a>
        </div>
    </div>
</body>
</html>