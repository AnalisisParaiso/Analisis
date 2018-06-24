@extends('reusable/layout')

@section('title')
    Detalles de usuario
@endsection

@section('userDetail')
    <br><br><br><br>
    <h1>Usuario # {{ $user->id }}</h1>
    <p>{{ 'Nombre del usuario: '.$user->name }}</p>
    <p>{{ 'Correo electrónico: '.$user->email }}</p>

    <a href="{{url("/usuarios")}}">Regresar al listado de usuarios</a>
    <hr>

@endsection

{{-- Se sobreescribe el sidebar que esta creado por defecto--}}
@section('sidebar')
    {{-- La directiva @parent permite sobreescribir el contenido del sidebar
    ya existente conservando el contenido previo del sidebar.

    Si dicha directiva esta sobre el texto de la etiqueta <h2> el contenido
    del sidebar padre estara arriba del <h2>, de lo contrario esta abajo --}}
    @parent
    <br><br><br><br>
    <h2>Barra lateral personalizada</h2>
@endsection
