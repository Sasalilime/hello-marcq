@extends('base')

@section('title', ' About | ' . config('app.name'))

@section('content')



    <div>
        Fait avec &hearts; par SuitsConception
        <a href="{{ route('home') }}">Revenir à la page d'accueil</a>
    </div>
@endsection
