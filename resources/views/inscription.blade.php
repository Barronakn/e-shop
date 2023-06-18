@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold mb-6">Inscription</h1>

        @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="flex flex-col gap-2 justify-center items-center" method="POST" action="{{ route('inscription') }}"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom :</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mot de passe :</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirmer le mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">S'inscrire</button>
            <a href="{{route("connexion")}}" class="text-yellow-600">Se connecter</a>
        </form>
    </section>
@endsection
