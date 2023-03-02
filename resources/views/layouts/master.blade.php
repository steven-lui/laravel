<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/hamburgers.css')
    <title>@yield('title')</title>
</head>

<body class="bg-black text-white">
    <header>
        {{-- <div class="burger hidden">
            <button class="hamburger hamburger--spin outline outline-white rounded-full" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div> --}}

        <nav class="hidden lg:block outline outline-2 py-4">
            <ul class="flex w-5/6 m-auto">
                <li class="grow">
                    <x-header.button url="{{ url('index') }}" name="Home" />
                </li>
                @guest
                    <li>
                        <x-header.button url="" name="Sign In" />
                    </li>
                    <li>
                        <x-header.button url="" name="Register" />
                    </li>
                @endguest
                @auth
                    <li>
                        <x-header.button url="" name="Dashboard" />
                    </li>
                    <li>
                        <x-header.button url="" name="Log Out" />
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    <main class="w-5/6 m-auto">
        @yield('content')
    </main>
</body>

</html>
