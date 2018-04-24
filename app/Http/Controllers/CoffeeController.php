<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Coffee;

class CoffeeController extends Controller
{
  
    public function show(Coffee $coffee){
      
      return view('coffees.show', compact('coffee'));
      
    }
  
    public function showCoffees(){
      
        $coffees = Coffee::all();
      
        return view('coffees.index', compact('coffees'));
    }
      
}


/*class CoffeeController extends Controller
{
    public function show(Coffee $coffee){
      
      //$coffee = Coffee::find($id);
      
      //return $coffee;
      return view('coffees.show', compact('coffee'));
      
    }
  
    public function showCoffees(){
      // Query builder syntax
      // $coffees - DB::tables('coffees')->get();
      
      // Eloquent syntax
        $coffees = Coffee::all();
      
        return view('coffees.index', compact('coffees'));
    }
      
}*/