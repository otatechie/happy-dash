<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-font></x-font>

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @wireUiScripts
</head>

<body x-data="{ open: false }" x-cloak class="bg-gray-50">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <div>
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto w-96">
                <div class="bg-white px-6 py-6 shadow-sm sm:rounded-lg">
                    <h2 class="text-center text-2xl font-semibold leading-9 tracking-tight text-gray-900">Confirm
                        access
                    </h2>
                    <p class="text-gray-500 mt-2 text-sm">This is a secure area. Please enter your password to confirm
                        access
                    </p>
                    <form class="space-y-6" action="{{ url('user/confirm-password') }}" method="POST">
                        @csrf
                        <div>
                            <x-inputs.password type="password" name="password" label="Password" required />
                        </div>
                        <div class="py-4">
                            <x-button md class="w-full font-medium leading-6" type="submit" blue
                                label="Confirm password" />
                        </div>
                    </form>
                </div>
            </div>
            <p class="mt-10 text-center text-sm text-gray-500">
                Go back to
                <a href="{{ route('dashboard') }}"
                    class="font-medium leading-6 text-blue-600 hover:text-blue-500">dashboard</a>
            </p>
        </div>
    </div>

    @livewireScripts
</body>

</html>
