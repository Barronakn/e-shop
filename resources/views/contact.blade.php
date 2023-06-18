@extends('layouts.app')

@section('title', 'Contactez-nous')

@section('content')
    @include('partials.nav')

    <div class="flex flex-col justify-center items-center pb-8  ">
        <h1 class="text-3xl font-bold mb-6">Contactez-nous</h1>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form class="flex flex-col gap-2 justify-center items-center" method="POST" action="{{ route('contact') }}"
            enctype="multipart/form-data">
            @csrf

            <label for="name" class="block text-gray-700">Nom :</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">

            <label for="email" class="block text-gray-700">E-mail :</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">

            <label for="message" class="block text-gray-700">Message :</label>
            <textarea rows="8" id="message" name="message" required
                class="w-full resize-none px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"></textarea>

            <button type="submit"
                class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Envoyer</button>
        </form>
    </div>

    @include('partials.footer')
@endsection
