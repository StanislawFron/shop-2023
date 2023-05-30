<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryPageController extends Controller
{
    public function showCategory($categoryName){
        $groups = DB::table('groups')->get()->where('parent_name', $categoryName);

        return view('layouts.category', ['categoryName' => $categoryName, 'groups' => $groups]);
    }

    public function showCategoryGroup($categoryName, $groupName){
        $itemsUnder = DB::table('items')->get()->where('category', $categoryName)->where('group', $groupName)->where('price', "<" , 500);
        $itemsAbove = DB::table('items')->get()->where('category', $categoryName)->where('group', $groupName)->where('price', ">=" , 500);

        return view('layouts.group', ['categoryName' => $categoryName,'groupName' => $groupName, 'itemsUnder' => $itemsUnder, 'itemsAbove' => $itemsAbove]);
    }

    public function showCategoryGroupItem($cat, $gro, Items $item){
        return view('layouts.product', ['item' => $item]);
    }
}
