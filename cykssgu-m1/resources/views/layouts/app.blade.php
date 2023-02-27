<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div id="app">
        <section>
            <div class="container $zindex-fixed">
                <header class=" flex-wrap align-itms-center justify-content-center d-flex justify-content-md-between mb-md-0 md-auto py-3 border-bottom">
                    <a href="" class="d-flex justify-content-centr align-itms-center m-2">
                        <a href="{{route('home')}}"><span class="fs-2"><img src="../resources/views/img/logo.png" alt="*"></span></a>
                    </a>

                    <ul class=" nav d-flex col-lg-5 fs-3 align-itms-center">
                        <li><a href="{{route('catalog')}}" class="nav-link px-3 link-dark">Каталог</a></li>
                        <li><a href="{{route('aboutus')}}" class="nav-link px-3 link-dark">О нас</a></li>
                        <li><a href="{{route('wheretofind')}}" class="nav-link px-3 link-dark">Где нас найти</a></li>
                    </ul>


                    @if (!Auth()->user())
                        <div class="d-flex align-itms-center col-lg-4">
                            <a href="{{route('register')}}"><button class="submit btn btn-outline-dark mx-3 fs-4">Зарегистрироваться</button></a>
                            <a href="{{route('login')}}"><button class="submit btn btn-dark fs-4">Войти</button></a>
                        </div>
                    @else
                    <a href=""><button class="submit btn btn-dark fs-4">Выйти</button></a>
                    @endif
                </header>
            </div>
        </section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
