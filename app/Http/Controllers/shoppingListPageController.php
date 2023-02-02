<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppingListPageController extends Controller
{
    public function index(){
        return view('layouts.shoppingList');
    }
}
