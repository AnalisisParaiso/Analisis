@extends('reusable/layout')

@section('title')
    Página no encontrada
@endsection

@section('contentError404')
    <h1>Página no encontrada</h1>
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
