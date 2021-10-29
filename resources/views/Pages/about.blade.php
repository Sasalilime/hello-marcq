@extends('layouts/base', ['title' => ' About'])


@section('content')

    <img width="300rem" src={{ asset('/images/suit.png') }} alt="suit">


    Fait avec <span class="text-red-400">&hearts;</span> par SuitsConception
    <a class="block text-indigo-500 hover:text-indigo-600 underline" href="{{ route('home') }}">Revenir à la page
        d'accueil</a>
    </div>
@endsection
