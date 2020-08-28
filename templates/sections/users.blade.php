@extends('default')

@section('title', 'Pagina/> de usuarios')

@section('content')

    <h1>Este es Usuarios</h1>

    @if(is_array($all))
        @foreach ($all as $user)
            <p>This is user {{ $user['nombre'] }}</p>
        @endforeach
    @endif

@endsection
