@extends('layouts.app')

@section('title', 'Mon compte')


@section('content')
    @include('partials.nav')

    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-bold mb-6">Mon compte</h1>

        <h3 class="text-lg font-bold mb-2">Informations personnelles</h3>
        <p class="mb-2">Nom : {{ $user->name }}</p>
        <p class="mb-6">Email : {{ $user->email }}</p>

        <h3 class="text-lg font-bold mb-2">Commandes récentes</h3>
        @foreach ($orders as $order)
            <p>Numéro de commande : {{ $order->order_number }}</p>
            <p>Montant : {{ $order->amount }}</p>
            <hr class="my-4">
        @endforeach
    </div>

    @include('partials.footer')
@endsection
