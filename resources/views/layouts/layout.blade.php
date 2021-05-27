<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}"
</head>
<body>
    <x-layout.cabecera class="h-15v bg-cabecera"/>
    <x-layout.menu class="h-10v bg-gray-200"/>
    <main class="h-65v bg-yellow-100">
    @yield("contenido")
    </main>
    <x-layout.footer class="h-10v bg-green-600"/>
</body>
</html>
