@extends('layouts.app')

@section('title', 'Shops')

@section('content')
    @include('partials.nav')

    <h1 class="text-center text-3xl font-bold mt-8">Liste des produits</h1>

    <ul class="grid grid-cols-3 gap-20 py-24 px-20">
        @foreach ($products as $product)
            <div class="flex flex-col bg-white shadow-xl shadow-black p-9 rounded-xl">
                @if ($product->image)
                    <a href="{{ route('shop', $product->id) }}">
                        <img src="{{ $product->getImageUrl() }}" alt="Product Image">
                    </a>
                @else
                    <p>Aucune image disponible</p>
                @endif

                <li class="flex justify-between text-center text-yellow-700 mt-5">
                    <a class="underline" href="{{ route('shop', $product->id) }}">{{ $product->name }}</a>
                    <span>{{ $product->price }} FCFA</span>
                </li>
            </div>
        @endforeach
    </ul>

    @include('partials.footer')
@endsection
