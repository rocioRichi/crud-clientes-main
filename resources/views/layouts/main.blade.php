<!DOCTYPE html>
<html lang="es_es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Alpe')</title>
    @vite(['resources/css/app.scss'])
</head>

<body class="d-flex flex-column h-100">
    <header class="mt-3">
        @include('_comun.menu')
        @yield('cabecera')
    </header>
    <main class="flex-shrink-0">
        <div class="container">
            <div class="grid-view">
                @yield('contenido')
            </div>
        </div>
    </main>
    @include('_comun/pie')

</body>
@vite(['resources/js/app.js'])

</html>
