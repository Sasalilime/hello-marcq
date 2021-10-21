@extends('base')
@section('title')
    Accueil | {{ env('APP_NAME') }}
@endsection

@section('content')


    <h1>Hello from France</h1>
    <p>La date et l'heure actuelles sont : {{ strftime('%A %e %B %H:%M') }}</p>

@endsection
