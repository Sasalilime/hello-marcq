@extends('base')
@section('title')
    Accueil | {{ config('app.name') }}
@endsection

@section('content')

    <img width="300rem" class="rounded-lg" src={{ asset('/images/marcq.jpg') }} alt="marcq">


    <h1 class="text-5xl text-blue-300">Hello from France</h1>
    <p>La date et l'heure actuelles sont : {{ strftime('%A %e %B %H:%M') }}</p>


@endsection
