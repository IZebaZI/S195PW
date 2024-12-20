<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Turista sin Maps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link {{request()->routeIs('form')?'text-warning':''}}" aria-current="page" href="{{route('form')}}">{{__('Registro de Clientes')}}</a>
            <a class="nav-link {{request()->routeIs('clients')?'text-success':''}}" href="{{route('clients')}}">{{__('Consultar Clientes')}}</a>
            <a class="nav-link {{request()->routeIs('components')?'text-primary':''}}" href="{{route('components')}}">{{__('Componentes')}}</a>
        </div>
        </div>
    </div>
</nav>

@yield('content')
@yield('clients')

</body>
</html>