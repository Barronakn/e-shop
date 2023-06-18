@extends('layouts.app')

@section('title', 'Connexion')


@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold mb-6">Connexion</h1>

    @if ($errors->any())
        <div class="bg-red-200 text-center text-red-800 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('connexion') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700">E-mail :</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Mot de passe :</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex gap-16 items-center">
            <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Se connecter</button>
            <a href="{{route("inscription")}}" class="text-yellow-600">S'inscrire</a>
        </div>
    </form>
    </section>
@endsection
