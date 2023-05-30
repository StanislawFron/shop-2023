<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutPageController extends Controller
{
    public function index(Request $request){

        if(auth::check()){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
