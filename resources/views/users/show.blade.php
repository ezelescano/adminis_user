@extends('layouts.plantilla')

@section('title', 'Show'.$user->name)

@section('content')
    <a href="{{route('users.index')}}">Volver al inicio</a>
   
    <h1>Bienvenido al detalle del usuario {{ $user->name }}</h1>
    <p>Lastname: {{$user->last_name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Cel: {{$user->tel_number}}</p>

@endsection
