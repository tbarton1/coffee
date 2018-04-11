@extends('layouts/app')

@section('content')

    <h1>Home of the Coffee Club!</h1>
<p>Here is a selection one instance of <s>coffee</s> member</p>
    <p>{{ $members->first_name }}</p>
    <p>{{ $members->last_name }}</p>
    <p>{{ $members->email }}</p>
    <p>{{ $members->phone }}</p>
    
@endsection