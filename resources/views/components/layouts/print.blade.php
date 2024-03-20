<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700&family=Nunito+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>

    @yield('content')

    @livewireScripts
</body>

</html>
