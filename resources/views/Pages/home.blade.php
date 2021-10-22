@extends('base')
@section('title')
    Accueil | {{ config('app.name') }}
@endsection

@section('content')
    <img width="300rem" src="images/marcq.jpg" alt="marcq">


    <h1>Hello from France</h1>
    <p>La date et l'heure actuelles sont : {{ strftime('%A %e %B %H:%M') }}</p>

@endsection
