@extends('layouts/app')

@section('content')

    <h1>Home of the Coffee Club!</h1>
<p>Here is a selection one instance of <s>coffee</s> member</p>
    <p>{{ $member->first_name }}</p>
    <p>{{ $member->last_name }}</p>
    <p>{{ $member->email }}</p>
    <p>{{ $member->phone }}</p>
    
@endsection