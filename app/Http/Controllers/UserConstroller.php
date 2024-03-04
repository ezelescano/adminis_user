<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConstroller extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name'=> $request->name,
            'last_name'=> $request->last_name,
            'tel_number'=> $request->tel_number,
            'email'=> $request->email,
            'password'=>bcrypt($request->password) 
        ]);

        return redirect()->route('users.show', $user->id);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
