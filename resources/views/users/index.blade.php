@extends('layouts/app')

@section('content')

  <h1>Home of the Coffee Club!</h1>
<p>Here is a selection for all of our <s>coffee</s> <s>members</s> users</p>
  
   @foreach($users as $user)
     <ul>
       <li>{{$user->user_name }}</li>
     </ul>
     
    @endforeach
    
  @endsection