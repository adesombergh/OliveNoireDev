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
                    <li>
                        <div class="dropdown is-hoverable">
                            <a class="follow" aria-haspopup="true" aria-controls="dropdown-follow">FOLLOW</a>
                            <div class="dropdown-menu" id="dropdown-follow" role="menu">
                                <ul>
                                    <li><a href="#">newsletter</a></li>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">instagram</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">tinder</a></li>
                                    <li><a href="#">youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('more') }}" class="more">MORE</a>
                    </li>
                </ul>
            </nav>
            <div class="logo">
                <a href="/"><img src="{{ asset('images/logo.svg') }}" alt=""></a>
            </div>
            <nav class="links links-center">
                <ul>
                    <li>
                        <a href="{{ route('news') }}">N<span>E</span>WS</a>
                    </li>
                    <li>
                        <a href="{{ route('artists') }}"><span>A</span>RT<span>I</span>STS</a>
                    </li>
                    <li>
                        <a href="{{ route('releases') }}">R<span>E</span>L<span>EA</span>S<span>E</span>S</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <a href="/">OLIVE NOIRE</a>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>