@extends('app')

@section('title', 'about us | '. config('project.variable'))


@section('content')

    <img src="{{ asset('images/tdn-logo.jpg') }}" alt="tdn logo">
    
    <p>Built with &hearts; by LES TEACHERS DU NET</p>

    <p><a href="{{ route('home') }}">Revenirvà la page d'acceuil</a></p>
@endsection