<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginPageController extends Controller
{
    public function index(){
        return view('layouts.login');
    }

    public function login(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
