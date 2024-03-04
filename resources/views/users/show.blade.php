@extends('layouts.plantilla')

@section('title', 'Show' . $user->name)

@section('content')

    <div class="conteiner">
        <div>
            <h1 class="text-2xl font-bold text-center">Bienvenido al detalle del usuario {{ $user->name }}</h1>
        </div>

        <div>
            <a class=" ml-2 text-xs hover:underline text-blue-300" href="{{ route('users.index') }}">Volver al inicio</a>
        </div>

        <div class="border p-4 rounded-md">
            <dl class="grid grid-cols-2 gap-3 ">
                <div class="border-b border-gray-300">
                    <dt class="font-bold">Nombre: </dt>
                    <dd class="p-2">{{ $user->name }}</dd>
                </div>

                <div class="border-b border-gray-300">
                    <dt class="font-bold">Apellido: </dt>
                    <dd class="p-2">{{ $user->last_name }}</dd>
                </div>

                <div>
                    <dt class="font-bold">Email: </dt>
                    <dd class="p-2">{{ $user->email }}</dd>
                </div>

                <div>
                    <dt class="font-bold">Celular: </dt>
                    <dd class="p-2">{{ $user->tel_number }}</dd>
                </div>



            </dl>
        </div>
    </div>


@endsection
