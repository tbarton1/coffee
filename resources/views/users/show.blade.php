@extends('layouts/app')

@section('content')

    <h1>Home of the Coffee Club!</h1>
<p>Here is a selection one instance of <s>coffee</s> <s>members</s> users</p>
    <p>{{ $users->user_name }}</p>
    <p>{{ $users->user_password }}</p>
    <p>{{ $users->email }}</p>
    
@endsection