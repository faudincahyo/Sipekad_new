<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sipekad Pejagalan</title>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
</head>

<body class="antialiased" style="background-color: rgb(95, 212, 95)">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sipekad Pejagalan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="nav-link text-sm text-gray-700 dark:text-gray-500 underline text-decoration-none fs-5 text-dark">Log
                            in</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline text-decoration-none fs-5 text-dark">Register</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <main class="py-4 mt-5">
            <div class="container">
                <div class="row order-1">
                    {{-- Welcome --}}
                    <div class="col-6 ms-5">
                        <div class="desc-1">
                            <h4>CARI PERSYARATAN DOKUMEN ANDA DENGAN SIPEKAD PEJAGALAN</h4>
                        </div>

                        {{-- image --}}
                        <div class="desc-2">
                            <p>Informasi persyaratan KTP, SIM, SKCK, Surat Pindah Domisili
                                ,dan surat Rekomendasi Nikah
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 ms-auto order-2 img-main">
                        <img class="img-1" src="{{ asset('asset/image/undraw_file_searching_re_3evy.svg') }}"
                            alt="" style="width: 450px">
                    </div>
                </div>
            </div>
        </main>

    </div>
</body>

</html>
