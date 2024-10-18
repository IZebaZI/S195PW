<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <form class="mx-3 my-3" action="/resultados" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="h2 text-center">Calculadora</p>
                <p class="h6 text-center">MegaBytes <-> GigaBytes</p>
                <p class="h6 text-center">GigaBytes <-> TeraBytes</p>
                <div class="input-group flex-nowrap my-3">
                    <span class="input-group-text" id="addon-wrapping">MB/GB/TB</span>
                    <input type="number" step="0.1" name="input" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-3">
                <select class="form-select" name="select" id="">
                    @if (isset($select))
                        @if ($select === "1")
                            <option value="1" selected>MB to GB</option>
                            <option value="2">GB to MB</option>
                            <option value="3">GB to TB</option>
                            <option value="4">TB to GB</option>
                        @elseif ($select === "2")
                            <option value="1">MB to GB</option>
                            <option value="2" selected>GB to MB</option>
                            <option value="3">GB to TB</option>
                            <option value="4">TB to GB</option>
                        @elseif ($select === "3")
                            <option value="1">MB to GB</option>
                            <option value="2">GB to MB</option>
                            <option value="3" selected>GB to TB</option>
                            <option value="4">TB to GB</option>
                        @elseif ($select === "4")
                            <option value="1">MB to GB</option>
                            <option value="2">GB to MB</option>
                            <option value="3">GB to TB</option>
                            <option value="4" selected>TB to GB</option>
                        @endif
                    @else
                        <option value="1">MB to GB</option>
                        <option value="2">GB to MB</option>
                        <option value="3">GB to TB</option>
                        <option value="4">TB to GB</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-1">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            <div class="col-1">
                <a href="{{route('portada')}}" class="btn btn-dark">Regresar</a>
            </div>
        </div>
    </form>

    @if (isset($resultado))
        @if ($resultado === "Error")
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                    <div class="alert alert-danger text-center" role="alert">
                        Error: Revise los datos ingresados
                    </div>
                </div>
            </div>
        @else
        <div class="row justify-content-center mt-3">
            <div class="col-4">
                <div class="alert alert-secondary text-center" role="alert">
                    Resultado: {{$resultado}}
                </div>
            </div>
        </div>
        @endif
    @endif
</body>
</html>