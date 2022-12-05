@extends('app')

@section('content')

    <img src="{{ asset('images/quebec-logo.png') }}" alt="quebec flag" class="rounded shadow-md h-32 mt-12">
    
    <h1 class="text-indigo-600 text-3xl sm:text-5xl font-semibold mt-5">Hello from Quebec</h1>

    <p class="text-gray-800 text-lg">It's currently {{ date('h:i A') }}.</p>

@endsection



    