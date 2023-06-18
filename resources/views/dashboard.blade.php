@extends("layouts.app")

@section('title', 'Welcome')

@section("content")
    @include("partials.nav")

    <section class="home py-10">
        <div class="ml-20 mt-48 w-2/3">
            <h1 class="text-4xl font-bold mb-4">Bienvenue sur votre espace de shopping</h1>
            <p class="text-lg text-gray-700">Découvrez une large sélection de produits de qualité</p>
        </div>
    </section>

    @include("partials.footer")
@endsection
