@extends('layouts/app')

@section('content')

  <h1>Home of the Coffee Club!</h1>
  <p>Here is a selection for all of our coffee</p>
  
   @foreach($coffees as $coffee)
     <ul>
       <li>{{$coffee->name }}</li>
     </ul>
     
    @endforeach
    
  @endsection