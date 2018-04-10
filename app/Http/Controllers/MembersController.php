<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function show(Member $member){
      
      //$member = Member::find($id);
      
      //return $member;
      return view('members.show', compact('member'));
      
    }
  
    public function showMembers(){
      // Query builder syntax
      // $members - DB::tables('members')->get();
      
      // Eloquent syntax
        $members = Member::all();
      
        return view('members.index', compact('members'));
    }
}
