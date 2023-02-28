<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'username' => 'required|min:3|max:20|unique:users,username',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|max:25|min:8'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Registration successful.');

    }
}
