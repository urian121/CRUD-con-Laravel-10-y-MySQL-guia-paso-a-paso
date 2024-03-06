<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD (Crear, Leer, Actualizar y Eliminar) con Laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <h1 class="text-center mt-5 mb-5 fw-bold">CRUD (Crear, Leer, Actualizar y Eliminar) <br> con Laravel 10 y MySQL</h1>
    
    <div class="container">
        @include('messages')
        
        <div class="row justify-content-md-center">
            <div class="col-md-4" style="border-right: 1px solid #dee2e6;">
                @include('empleados.add')
            </div>

            @yield('content')
            <div class="col-md-8">
                <h1 class="text-center">Lista de empleados</h1>
                   @include('empleados.index')
            </div>
        </div>
    </div>

</body>

</html>