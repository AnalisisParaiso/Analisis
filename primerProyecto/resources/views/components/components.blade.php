@extends('reusable/layout')

@section('title')
    Compontes
@endsection

@section('title', "Usuario  $id ")

{{-- @section es una directiva que define una sección de contenido--}}
@section('components')
    <br><br><br><br>
    <h1>{{ $title }}</h1>

    <hr>
    @if ($id != null)
        <h2>El id ingresado fue {{ $id }}</h2>
    @endif

    <br>
@endsection
