<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración</title>
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/back/style.css')}}">
</head>
<body>
    <main class="MainBack row">
        @include('partials.menu')
        @yield('content')
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    @yield('scripts')
</body>
</html>