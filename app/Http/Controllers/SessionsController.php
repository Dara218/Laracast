<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Good bye.');
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){

        //Validate the user's credentials
        $loginCredentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //Attempts to login the user
        if(auth()->attempt($loginCredentials)){
            session()->regenerate();
            return redirect('/')->with('success', 'Login Success');
        }

        //If attempt fails
        return back()->withInput()->with('error', 'Invalid login details.');

    }
}
