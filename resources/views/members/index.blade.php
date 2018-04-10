@extends('layouts/app')

@section('content')

  <h1>Home of the Coffee Club!</h1>
<p>Here is a selection for all of our <s>coffee</s> members</p>
  
   @foreach($members as $member)
     <ul>
       <li>{{$member->first_name }} {{$member->last_name}}</li>
     </ul>
     
    @endforeach
    
  @endsection