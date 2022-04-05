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
                <p class="text-xs mt-4">Let us know what you would like to vote on</p>
            </div>

            <form action="#" method="POST" class="space-y-4 px-4 py-6 text-sm">
                <div>
                    <input type="text" class="w-full bg-gray-100 rounded-xl text-xs placeholder-gray-900 px-4 py-2 border-0" placeholder="Your idea">
                </div>
                <div>
                    <select name="category_add" id="category_add" class="bg-gray-100 w-full text-xs rounded-xl border-0 px-4 py-2">
                        <option value="Category One">Category One</option>
                        <option value="Category Two">Category Two</option>
                        <option value="Category Three">Category Three</option>
                        <option value="Category Four">Category Four</option>
                    </select>
                </div>
                <textarea name="idea" id="id" cols="30" rows="4" class="w-full bg-gray-100 text-xs rounded-xl placeholder-gray-900 px-4 py-2 border-0" placeholder="Describe your idea in a few words"></textarea>
                <div class="flex items-center justify-between space-x-3">
                    <button type="button" class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                        <svg class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-2">Attach</span>
                    </button>

                    <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-sm text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3">
                        <span>Submit</span>
                    </button>
                </div>
            </form>
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
</body>

</html>