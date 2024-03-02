@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a la lista de usuarios</h1>

    <ul>
        @foreach ($users as $user)
         <a href="{{route('users.show', $user)}}"><li>{{$user->name}}</li></a>  
        
        @endforeach
    </ul>

    {{ $users->links() }}
@endsection