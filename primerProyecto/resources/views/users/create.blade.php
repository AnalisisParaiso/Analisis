@extends('reusable/layout')

@section('title')
    Crear usuario
@endsection

{{-- @section es una directiva que define una sección de contenido--}}
@section('usersList')
    <br><br><br><br>
    <h1>Crear usuario</h1>

    <hr>

    {{-- Se valida si hay algún error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>
                Por favor corrige los siguientes errores
            </h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="" action="{{url('usuarios/crear')}}" method="POST">
        <input type="text" name="name" value="" placeholder="Name" autocomplete="off">
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" autocomplete="off">
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <input type="password" name="password" value="" placeholder="password" id="nuevo" >
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif
        {!! csrf_field() !!} {{-- Se usa para evitar ataques de peticiones POST de sitios maliciosos--}}
        <button type="submit" name="button">Crear usuario</button>
    </form>
    <a href="{{url("/usuarios")}}">Regresar al listado de usuarios</a>


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
