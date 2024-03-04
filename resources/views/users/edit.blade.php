@extends('layouts.plantilla')

@section('title', 'Edit Usuario')

@section('content')
    <div class="container mx-auto">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Bienvenidos al formulario de edicion de usuarios</h1>
        </div>

        <div>
            <a class="text-xs hover:underline text-blue-300" href="{{ route('users.index') }}">Volver al Inicio</a>
        </div>

        <form action="{{ route('users.update', $user) }}" method="POST">

            @csrf

            @method('put')

            <div class="flex flex-col items-center mt-4">
                <div class="bg-red-200 inline p-2 rounded">
                    <label>
                        Nombre
                        <input type="text" name="name" value="{{ old('name', $user->name) }}">
                    </label>
                </div>

                <div class="bg-blue-200 inline p-2 rounded mt-2">
                    <label>
                        Apellido:
                        <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                    </label>
                </div>

                <div class="bg-yellow-200 inline p-2 rounded mt-2">
                    <label>
                        Celular:
                        <input type="text" name="tel_number" value="{{ old('tel_number', $user->tel_number) }}">
                    </label>
                </div>

                <div class="bg-green-200 inline p-2 rounded mt-2">
                    <label>
                        Email:
                        <input type="text" name="email" value="{{ old('email', $user->email) }}">
                    </label>
                </div>

                <div class="bg-red-200 inline p-2 rounded mt-2">
                    <label>
                        Password
                        <input type="password" name="password" value="{{ old('password', $user->password) }}">
                    </label>
                </div>

                <div class="mt-4">
                    <button class="inline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        type="submit">Actualizar Usuario</button>
                </div>
            </div>
        </form>
    </div>

@endsection
