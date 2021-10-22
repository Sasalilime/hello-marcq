@extends('base')

@section('title', ' About | ' . config('app.name'))

@section('content')

    <img width="300rem" src="/images/suit.png" alt="suit">

    <div>
        Fait avec &hearts; par SuitsConception
        <a href="{{ route('home') }}">Revenir à la page d'accueil</a>
    </div>
@endsection
