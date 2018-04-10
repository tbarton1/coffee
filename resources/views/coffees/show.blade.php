@extends('layouts/app')

@section('content')

    <h1>Home of the Coffee Club!</h1>
    <p>Here is a selection one instance of coffee</p>
    <p>{{ $coffee->name }}</p>
    <p>{{ $coffee->roast }}</p>
    <p>{{ $coffee->country_of_origin }}</p>
    <p>{{ $coffee->description }}</p>
    
@endsection