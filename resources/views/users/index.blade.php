@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')

    <h1>Bienvenidos a la lista de usuarios</h1>
    <a href="{{route('users.create')}}">Ingresar un nuevo Usuario</a>
    <ul>
        @foreach ($users as $user)
         <a href="{{route('users.show', $user->id)}}"><li>{{$user->name}}</li></a>  
        
        @endforeach
    </ul>

    {{ $users->links() }}
@endsection

