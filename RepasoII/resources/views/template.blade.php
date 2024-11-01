<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>
    <title>@yield('title')</title>
</head>
<body style="background-color: rgb(110, 75, 75)">
    {{-- NAVBAR --}}
    <div>
        <header class="d-flex justify-content-center py-3 mb-4 bg-dark">
        <a href="{{route('main')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 text-white"><i class="bi bi-book-half mx-3"></i>Biblioteca de Alejandría</span>
        </a>
    
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('main')}}" class="btn me-2 {{request()->routeIs('main')?'btn-danger':'btn-outline-danger'}}" aria-current="page">Vista Principal</a></li>
            <li class="nav-item"><a href="{{route('form')}}" class="btn me-2 {{request()->routeIs('form')?'btn-danger':'btn-outline-danger'}}">Registrar Libro</a></li>
        </ul>
        </header>
    </div>

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <div>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 bg-dark text-white">
            <div>
            <span class="fs-6"><i class="bi bi-book-half mx-3"></i>Biblioteca de Alejandría</span>
            </div>
            <div>
                <span class="fs-6 me-3">©  Biblioteca de Alejandría, Inc | {{ date('m-d-Y') }}</span>
            </div>
        </footer>
    </div>
</body>
</html>