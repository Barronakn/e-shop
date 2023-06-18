@extends('layouts.app')

@section('title', 'Mon panier')

@section('content')
    @include('partials.nav')

    <section class="px-20">
        <h1 class="text-center text-2xl py-6 font-bold">Panier</h1>

        @if ($cartItems->count() > 0)
            <table class="w-full border">
                <thead>
                    <tr>
                        <th class="py-2 border-b">Produits</th>
                        <th class="py-2 border-b">Prix unitaire</th>
                        <th class="py-2 border-b">Quantité</th>
                        <th class="py-2 border-b">Actions</th>
                        <th class="py-2 border-b">Prix total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $cartItem)
                        <tr class="text-center">
                            <td class="py-2 border-b">{{ $cartItem->product->name }}</td>
                            <td class="py-2 border-b">{{ $cartItem->product->price }} FCFA</td>
                            <td class="py-2 border-b">
                                {{ $cartItem->quantity }}
                            </td>
                            <td class="py-2 border-b">
                                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Supprimer</button>
                                </form>
                            </td>
                            <td class="py-2 border-b">{{ $cartItem->product->price * $cartItem->quantity }} FCFA</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="text-center">
                    <tr>
                        <td class="py-2 border-b"></td>
                        <td class="py-2 border-b"></td>
                        <td class="py-2 border-b"></td>
                        <td class="py-2 border-b">Prix total</td>
                        <td>{{ $totalPrice }} FCFA</td>
                    </tr>
                </tfoot>
            </table>

            <div class="flex justify-center mb-60">
                <button class="pay-btn py-2 px-4 mt-4 bg-yellow-500 text-white rounded hover:bg-yellow-600"
                    data-transaction-amount="{{ $totalPrice }}" data-transaction-description="Acheter mon produit">
                    Payer
                </button>
            </div>

            <script src="https://js.fedapay.com/checkout.js"></script>
            <script>
                FedaPay.init('.pay-btn', {
                    public_key: 'pk_live_vqkxxq9z7b2pdDU6d5Uwnw7X'
                });
            </script>
        @else
            <p class="text-center">Le panier est vide.</p>
        @endif
    </section>

    @include('partials.footer')
@endsection
