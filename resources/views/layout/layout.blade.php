<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <header>
            <img src="{{asset("images/laravel.png")}}" />
            <h1> Práctica de Laravel</h1>
            <a href="">Acceder</a><br />
            <a href="">Registrarse</a><br />
        </header>
        <nav>
            <a href="">Clientes</a>
            <a href="">Facturas</a>
            <a href="">Empleados</a>
        </nav>
        @yield("contenido")
        <footer>
            <h3>Daniel E. Fernández Pera</h3>
        </footer>
    </body>
</html>
