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
            'username' => 'required|max:20|min:3',
            'email' => 'required|email|max:50',
            'password' => 'required|max:25|min:8'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        return redirect('/');

    }
}
