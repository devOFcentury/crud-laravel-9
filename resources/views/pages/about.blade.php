@extends('app')

@section('title', 'about us | '. config('project.variable'))


@section('content')

    <img src="{{ asset('images/tdn-logo.jpg') }}" alt="tdn logo" class="my-12  rounded-full shadow-md">
    
    <h2 class="text-gray-700 mb-5">Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET</h2>

    <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenirvà la page d'acceuil</a></p>
@endsection