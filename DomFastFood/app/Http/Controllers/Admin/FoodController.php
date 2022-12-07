<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    
public function list(Request $request){
    return view("admin.food.index", ["list"=>Food::paginate(3)]);
}
public function create(){
    return view("admin.food.form");
}
public function store(Request $request){
    Food::create($request->all());
    return redirect()->back()->with("success","Data saved!");
}

public function destroy(Food $post){
    $post->delete();
    return redirect(route("food.list"))->with("success","Data deleted!");
}



public function edit(Food $post){
    return view("admin.food.edit",["data"=>$post]);
}

#salva as edições
public function update(Food $post, Request $request) {
    $post->update($request->all());
    return redirect()->back()->with("success","Data updated!");
}



public function pesquisa(Request $request)
{
    $name = $request->query('name');

    $produtos = Food::table('food')
        ->where('name', 'like',  "%" .$name)
        ->get();
    return view('food')->with('food', $name);
}

}
