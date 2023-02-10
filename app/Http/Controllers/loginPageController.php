<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginPageController extends Controller
{
    public function show(){
        return view('layouts.login');
    }

    public function login(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        return view('layouts.home');
    }
}
