<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Referendum</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-gray-900 text-sm bg-gray-background">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#" class="logo">Logo</a> <!-- TODO insert Logo image <img src={{asset('img/logo.svg')}} alt="logo" />-->
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout')}} " onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="avatar.jpg" alt="placeholder guy" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto flex w-full max-w-custom">
        <div class="w-1/3 mr-6">
            Add idea form goes here Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, itaque?

        </div>
        <div class="w-full">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a class="border-b-4 pb-3 border-blue-600" href="">All Ideas (87)</a>
                    </li>
                    <li>
                        <a class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:text-gray-900 hover:border-blue-600" href="">Considering (6)</a>
                    </li>
                    <li>
                        <a class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:text-gray-900 hover:border-blue-600" href="">In Progress (1)</a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:text-gray-900 hover:border-blue-600" href="">Implemented (10)</a>
                    </li>
                    <li>
                        <a class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:text-gray-900 hover:border-blue-600" href="">Closed (55)</a>
                    </li>
                </ul>
            </nav>


            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>