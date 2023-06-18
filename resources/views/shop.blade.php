@extends('layouts.app')

@section('title', 'Shop')

@section('content')
    @include('partials.nav')

    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mt-8">Détails du produit</h1>

        <div class="flex flex-col md:flex-row items-center justify-center py-10">
            @if ($product->image)
                <div class="md:w-1/3">
                    <img class="w-full bg-white p-5" src="{{ $product->getImageUrl() }}" alt="Product Image">
                </div>
            @else
                <p class="text-center">Aucune image disponible</p>
            @endif

            <div class="md:w-2/3 md:pl-10">
                <h2 class="text-xl font-bold mb-3"><span class="underline">Produit</span>  : {{ $product->name }}</h2>
                <p><span class="underline">Description</span>  : {{ $product->description }}</p>
                <p><span class="underline">Prix</span>  : {{ $product->price }} FCFA</p>

                <form class="flex items-center mt-4" action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <label for="quantity" class="mr-2">Quantité :</label>
                    <button type="button" class="px-3 py-1 bg-yellow-500 text-white font-bold rounded-md" onclick="decrementQuantity()">-</button>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" class="w-16 px-2 py-1 border border-gray-300 rounded-md mx-2">
                    <button type="button" class="px-3 py-1 bg-yellow-500 text-white font-bold rounded-md" onclick="incrementQuantity()">+</button>
                    <button type="submit" class="px-4 py-2 bg-yellow-500 text-white font-bold rounded-md ml-4">Ajouter au panier</button>
                </form>

                <p class="mt-2"><span class="underline">Prix total</span> : <span id="totalPrice">{{ $product->price }}</span> FCFA</p>
            </div>

            <script>
                function incrementQuantity() {
                    let quantityInput = document.getElementById('quantity');
                    let totalPriceElement = document.getElementById('totalPrice');
                    let quantity = parseInt(quantityInput.value);
                    let price = parseFloat('{{ $product->price }}');
                    quantity++;
                    quantityInput.value = quantity;
                    totalPriceElement.textContent = (quantity * price).toFixed(2);
                }

                function decrementQuantity() {
                    let quantityInput = document.getElementById('quantity');
                    let totalPriceElement = document.getElementById('totalPrice');
                    let quantity = parseInt(quantityInput.value);
                    let price = parseFloat('{{ $product->price }}');
                    if (quantity > 1) {
                        quantity--;
                        quantityInput.value = quantity;
                        totalPriceElement.textContent = (quantity * price).toFixed(2);
                    }
                }
            </script>
        </div>
    </div>

    @include('partials.footer')
@endsection
