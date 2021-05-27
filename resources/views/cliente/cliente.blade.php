@extends("layouts.layout")

@section("contenido")
    <h1>Listado de clientes</h1>
    <table>
        <thead>
            <tr>Nombre</tr>
            <tr>Dirección</tr>
            <tr>Teléfono</tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->telefono}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
