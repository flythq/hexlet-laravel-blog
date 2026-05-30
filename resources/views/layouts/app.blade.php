<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hexlet Blog - @yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="csrf-param" content="_token" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4 mt-4">
<h1>@yield('header')</h1>
<div>
    @include('navigation.main')
</div>
<div class="max-w-5xl mx-auto p-6">
@yield('content')
</div>
</div>
</body>
</html>
