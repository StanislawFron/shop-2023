<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupPageController extends Controller
{
    public function index($categoryName, $groupName){
        return view('layouts.group', ['categoryName' => $categoryName,'groupName' => $groupName]);
    }
}
