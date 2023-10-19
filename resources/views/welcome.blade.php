<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'RaccoonTemplate') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

</head>
<body class="antialiased bg-cover bg-center" style="background-image: url('/bg.svg');">

<div
    class="relative sm:flex sm:items-center min-h-screen bg-opacity-50 bg-gray-100 dark:bg-dots-lighter dark:bg-opacity-60 dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <!-- Check for login route -->
    @if (Route::has('login'))
        <div class="sm:fixed p-6 text-left z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="block sm:inline-block mb-2 sm:mb-0 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <div class="flex gap-4">

                    <a href="{{ route('login') }}">
                        <x-primary-button>
                            Login
                        </x-primary-button>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <x-secondary-button>
                                Register
                            </x-secondary-button>
                        </a>
                    @endif
                </div>
            @endauth
        </div>
    @endif

</div>

</body>

</html>
