<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="links links-right">
                <ul>
                    <li><a href="#">FOLLOW</a></li>
                    <li><a href="#">MORE</a></li>
                </ul>
            </nav>
            <div class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="">
            </div>
            <nav class="links links-center">
                <ul>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">ARTISTS</a></li>
                    <li><a href="#">RELEASES</a></li>
                </ul>
            </nav>
        </header>

        <main>
        @yield('content')
        </main>

        <footer>
            <p>OLIVE NOIRE</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
