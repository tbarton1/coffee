<?php

namespace App\Http\Controllers;
;
use Illuminate\Http\Request;

use DB;
use App\User;

class UserController extends Controller
{
    public function show(User $users){
      
      //$users = User::find($id);
      
      //return $users;
      return view('users.show', compact('users'));
      
    }
  
    public function showUsers(){
      // Query builder syntax
      // $users - DB::tables('users')->get();
      
      // Eloquent syntax
        $users = User::all();
      
        return view('users.index', compact('users'));
    }
      
}
