<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Member;

class MemberController extends Controller
{
    public function show(Member $members){
      
      //$member = Member::find($id);
      
      //return $member;
      return view('members.show', compact('members'));
      
    }
  
    public function showMembers(){
      // Query builder syntax
      // $members - DB::tables('members')->get();
      
      // Eloquent syntax
        $members = Member::all();
      
        return view('members.index', compact('members'));
    }
}
