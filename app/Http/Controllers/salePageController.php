<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salePageController extends Controller
{
    public function index(){
        return view('layouts.sale');
    }
}
