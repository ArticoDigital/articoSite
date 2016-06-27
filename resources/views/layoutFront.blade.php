<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artico Digital</title>
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
</head>
<body>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    @yield('scripts')
</body>
</html>