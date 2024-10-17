<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container mt-3 text-center">
        <div class="row gy-3">
            <h1>REPASO LARAVEL</h1>
            <h5>Escuela: Universidad Politécnica de Querétaro</h5>
            <h5>Alumno: Ramírez García Sebastián</h5>
            <h5>Carrera: Ingeniería en Sistemas Computacionales</h5>
            <h5>Materia: Programación Web</h5>
            <h5>Maestro: Ivan Isay Guerra López</h5>
            <h5>Grupo: S195</h5>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-3">
                <img class="img-fluid" src="{{asset('img/upq-logo.png')}}" alt="logo">
            </div>
        </div>
    </div>
</body>
</html>