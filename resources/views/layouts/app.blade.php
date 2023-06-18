<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/Virtual_Shop_Logo.png') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <title>@yield('title', 'Mon site')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')
</body>
</html>
