<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConstroller extends Controller
{
    public function index()
    {
        return "Bienvenidos a la lista de usuarios";
    }

    public function create()
    {
        return "Bienvenidos al formulario de creacion";
    }

    public function show($id)
    {
        return "Bienvenido al detalle de $id";
    }
}
