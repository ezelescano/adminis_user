<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConstroller extends Controller
{
    public function __invoke()
    {
        return 'Bienvenisdos al administrador de Usuarios';
    }
}
