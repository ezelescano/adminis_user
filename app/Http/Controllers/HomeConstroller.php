<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConstroller extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
