@extends('base')
@section('title')
    Accueil | {{ config('app.name') }}
@endsection

@section('content')


    <h1>Hello from France</h1>
    <p>La date et l'heure actuelles sont : {{ strftime('%A %e %B %H:%M') }}</p>

@endsection
