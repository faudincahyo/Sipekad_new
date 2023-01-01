<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sipekad Pejagalan') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/require.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/table.css') }}">
</head>
<body style="background-color: rgb(152, 222, 231)">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light pe-3 border-0 bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" class="img ms-5">
                SIPEKAD PEJAGALAN
              </a>

                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto fs-5 fw-semibold">

                        <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                            <a class="nav-link"  aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="require">Persyaratan KTP</a></li>
                              <li><a class="dropdown-item" href="require/sim">Persyaratan SIM</a></li>
                              <li><a class="dropdown-item" href="/skck">Persyaratan SKCK</a></li>
                              <li><a class="dropdown-item" href="/domisili">Surat Pindah Domisili</a></li>
                              <li><a class="dropdown-item" href="/nikah">Surat Rekomendasi Nikah</a></li>
                            </ul>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil</a>
                        </li>
                        <li class="nav-item {{ (request()->is('input/input')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('input.create') }}">Input Dokumen</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('asset/js/input.js') }}"></script>
</body>
</html>
