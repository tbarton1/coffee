<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $users){
      
      //$users = User::find($id);
      
      //return $user;
      return view('users.show', compact('user'));
      
    }
  
    public function showUsers(){
      // Query builder syntax
      // $users - DB::tables('users')->get();
      
      // Eloquent syntax
        $users = Users::all();
      
        return view('users.index', compact('users'));
    }
      
}
