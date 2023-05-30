<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Groups;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accountPageController extends Controller
{
    public function index(){
        if(auth::check()){
            return view('layouts.account');
        }else{
            return view('layouts.home');
        }
    }

    public function show(){
         if(auth::check()){
            return view('layouts.items', ['items' => Items::where('author', "=", auth()->user()->name)->paginate(8)]);
        }else{
            return view('layouts.home');
        }
    }

    public function showItem(Items $item){
        return view('layouts.product', ['item' => $item]);
    }

    public function create(){
        if(auth::check()){
            return view('layouts.createItem', ['categories' => Categories::get()], ['groups' => Groups::get()]);
        }else{
            return view('layouts.home');
        }
   }

   public function store(Request $request){
    $request->request->add(['author' => auth()->user()->name]);
    $formFields = $request->validate([
        'title' => ['required'],
        'description' => ['required'],
        'price' => ['required', 'min:1'],
        'category' => ['required'],
        'group' => ['required'],
        'amount' => ['required', 'min:1'],
        'sale_percentage' => ['required'],
        'author' => ['required']
    ]);
    Items::create($formFields);
    return redirect('/account/items');
    }

    public function edit(Items $item){
        if(auth::check()){
            return view('layouts.editItem', ['item' => $item, 'categories' => Categories::get(), 'groups' => Groups::get()]);
        }else{
            return view('layouts.home');
        }
    }

    public function update(Request $request, Items $item){
        $request->request->add(['author' => auth()->user()->name]);
        $formFields = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'min:1'],
            'category' => ['required'],
            'group' => ['required'],
            'amount' => ['required', 'min:1'],
            'sale_percentage' => ['required'],
            'author' => ['required']
        ]);
            $item->update($formFields);
            return redirect('/account/items');
        }

    public function delete(Items $item){
        $item->delete();
        return redirect('/account/items');
    }

}
