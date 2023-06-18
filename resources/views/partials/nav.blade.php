<nav class="bg-gray-800">
    <div class="container mx-auto">
        <ul class="flex items-center justify-between py-4">
            <li>
                <a href="{{ route('accueil.utilisateur') }}" class="text-white font-bold text-lg">
                    <img class="w-14 h-14" src="{{ asset('images/Virtual_Shop_Logo.png') }}" alt="logoimg">
                </a>
            </li>
            <li>
                <a href="{{ route('shops') }}" class="text-gray-300 hover:text-white ml-6">Produits</a>
            </li>
            <li>
                <a href="{{ route('cart') }}" class="text-gray-300 hover:text-white ml-6">Panier</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white ml-6">Contact</a>
            </li>
            <li class="ml-6 relative group">
                <ul class="flex shadow-lg p-2 text-gray-700">
                    <li>
                        <a href="{{ route('compte') }}" class="rounded-s-lg bg-white py-3 px-6 hover:bg-gray-200">Compte</a>
                    </li>
                    <li>
                        <a href="{{ route('deconnexion') }}" class="rounded-e-lg bg-white py-3 px-6 hover:bg-gray-200">Déconnexion</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
