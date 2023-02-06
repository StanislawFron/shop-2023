<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryPageController extends Controller
{
    public function index($categoryName){

        $groups = DB::table('group')->get();

        return view('layouts.category', ['categoryName' => $categoryName, 'groups' => $groups]);
    }
}
