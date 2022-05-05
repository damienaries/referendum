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
    <livewire:styles />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-gray-900 text-sm bg-gray-background">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="#" class="logo">Logo</a> <!-- TODO insert Logo image <img src={{asset('img/logo.svg')}} alt="logo" />-->
        <div class="flex items-center mt-2 md:mt-0">
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

    <main class="container mx-auto flex flex-col md:flex-row w-full">

        <div class="w-full md:w-1/3 md:mr-6 border border-blue-600 bg-white mb-6 mx-auto md:mx-1 h-fit shadow-small hover:shadow-lg rounded-xl md:sticky md:top-8">
            <div class="text-center px-6 pb-2 pt-6">
                <h3 class="font-semibold text-base">Suggest a debate</h3>
                <p class="text-xs mt-4">
                    @auth
                    Let us know what you would like to vote on
                    @else
                    Please log in to suggest a debate
                    @endauth

                </p>
            </div>

            @auth
            <livewire:create-idea />
            @else
            <div class="my-6 text-center flex space-evenly items-center flex-col space-y-2">
                <a href={{ route('login') }} class="w-1/2 h-11 text-sm text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-3 py-2">
                    Login
                </a>
                <a href={{ route('register') }} class="w-1/2 h-11 text-sm text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-3 py-2">
                    Sign Up
                </a>
            </div>
            @endauth
        </div>
        <div class="w-full">
            <nav class="hidden md:flex items-center justify-between text-xs">
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
    <livewire:scripts />
</body>

</html>