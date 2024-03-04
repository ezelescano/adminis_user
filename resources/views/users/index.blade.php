@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')

    <div class="conteiner">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Bienvenidos a la lista de usuarios</h1>
        </div>

        <div>
            <a class="ml-2 text-xs hover:underline text-blue-300" href="{{ route('users.create') }}">Ingresar un nuevo
                Usuario</a>
        </div>

        <div class="flex justify-center">
            <table class=" border-collapse border border-gray-400">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-400 p-2">Nombres</th>
                        <th class="border border-gray-400 p-2">Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-400 p-2">
                                <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                            </td>
                            <td class="border border-gray-400 p-2">
                                <a href="{{ route('users.show', $user->id) }}">{{ $user->last_name }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    {{ $users->links() }}
@endsection
