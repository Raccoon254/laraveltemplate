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
<section class="main flex min-h-screen items-center justify-center flex-col">
    <div class="text-3xl">
        Welcome message
    </div>
    <div class="sm:flex sm:items-center dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        <!-- Check for login route -->
        @if (Route::has('login'))
            <div class="p-6 text-left z-10">
                @auth
                    <a href="{{ url('/dashboard') }}">
                        <x-primary-button>
                            Dashboard
                        </x-primary-button>
                    </a>
                @else
                    <div class="flex gap-4">

                        <a href="{{ route('login') }}">
                            <x-secondary-button class="ring-gray-50">
                                Login
                            </x-secondary-button>
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
</section>
</body>

</html>
