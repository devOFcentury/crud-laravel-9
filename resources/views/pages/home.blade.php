@extends('app')

@section('content')

    <img src="{{ asset('images/quebec-logo.png') }}" alt="quebec flag">
    
    <h1>Hello from Quebec</h1>

    <p>It's currently {{ date('h:i A') }}.</p>

@endsection



    