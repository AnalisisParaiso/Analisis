@extends('reusable/layout')

@section('title')
    Lista de usuarios
@endsection

{{-- @section es una directiva que define una sección de contenido--}}
@section('usersList')
    <br><br><br><br>
    <h1>{{ $title }}</h1>

    <hr>

    @forelse ($usersList as $user)
        <ul>
            {{-- Se imprime el contenido de esta manera por que "users" es un
            objeto de bd--}}
            {{-- '/usuarios/'.$user->id corresponde a la ruta a que el link accede--}}
            {{--<li>{{ $user->name }}, ({{ $user->email }}) <a href="{{ url('/usuarios/'.$user->id) }}">Ver detalles</a></li>--}}
            {{--<li>{{ $user->name }}, ({{ $user->email }}) <a href="{{ url("/usuarios/detalles/{$user->id}") }}">Ver detalles</a></li>--}}
            {{--Una forma mas segura de trabajar el enrutamiento es colocando nombres a las rutas,
            por ejemplo: "users.details", el cual se establecio en el archivo web.app--}}
            <li>{{ $user->name }}, ({{ $user->email }}) <a href="{{ route("users.details", ['id' => $user->id]) }}">Ver detalles</a>
                <a href="{{ route("users.edit", ['user' => $user]) }}">Editar</a>
                <form class="" action="{{ route("users.destroy", ['user' => $user]) }}" method="POST">
                    {{ method_field('DELETE') }}{{-- Se envía el nombre del método correcto
                        ose PUT en ves de POST--}}
                    {!! csrf_field() !!} {{-- Se usa para evitar ataques de peticiones POST de sitios maliciosos--}}
                    {{--Si el la primera ves que se carga la página se cargan los datos que
                    viennen en el objeto User que se esta enviando, y si no entonces carga
                    el dato antiguo --}}
                    <button type="submit" name="button">Eliminar usuario</button>
                </form>
            </li>
        </ul>
    @empty
        <p>No hay registros en la BD con forelse</p>
    @endforelse

    <input type="button" name="Hola" value="Hola" id="btnHola">
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
