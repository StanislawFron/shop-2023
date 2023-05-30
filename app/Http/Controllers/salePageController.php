<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class salePageController extends Controller
{
    public function index(){
        return view('layouts.sale', ['items' => DB::table('items')->get()->where('sale_percentage', '>=' ,0)]);
    }

    public function show(Items $item){
        return view('layouts.product', ['item' => $item]);
    }
}
