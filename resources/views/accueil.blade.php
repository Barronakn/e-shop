@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="acceuil">
        <nav class="flex justify-between px-40 py-5">
            <div class="logo">
                <a href="{{ route('accueil') }}">
                    <img class="w-14 h-14" src="{{ asset('images/Virtual_Shop_Logo.png') }}" alt="logoimg">
                </a>
            </div>
            <div class="form flex gap-20">
                <li>
                    <a href="{{ route('connexion') }}">Connexion</a>
                </li>
                <li>
                    <a href="{{ route('inscription') }}">Inscription</a>
                </li>
            </div>
        </nav>
        <header class="mt-52 ml-10">
            <h1 class="text-4xl">Parce que la mode n'as plus de secret</h1>
        </header>
    </div>
@endsection
