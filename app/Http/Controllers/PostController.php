<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostController extends Controller
{
  
    public function show(Post $post){
      
      return view('posts.show', compact('post'));
    
    }
  
  
    public function showPosts(){
      
      $posts = Post::all();
      
      return view('posts.index', compact('post'));
    
    }
  
    
}

