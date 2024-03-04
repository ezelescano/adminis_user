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
            'name' => $request->name,
            'last_name' => $request->last_name,
            'tel_number' => $request->tel_number,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('users.show', $user->id);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index');
    }
}
