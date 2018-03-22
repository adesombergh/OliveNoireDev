@extends('layouts.app')

@section('content')
<div class="container artist">
    <div class="columns description">
        <div class="column is-3">
            <img src="{{asset('images/Isa.jpg')}}" alt="">
        </div>
        <div class="column is-9">
            <div class="text-1">
                <p>Une chose que l’on pensait définie ne l’est peut-être pas. Fouiller, exploiter, abimer, déstructurer, dégrader, et finalement épurer, pour faire avec ce peu filtré un ensemble d’incohérences choisies qui mèneront au voyage.</p>
                <p>Pendant ses quelques années d’apprentissage du solfège, des percussions, et du chant dès le plus jeune âge,  Isabelle s’applique à enregistrer des sons sur son magnéto cassette entre expérimentations sonores et rap. Après ces années trop peu motivées au conservatoire, il est le temps des premiers travaux. Premières compositions, pour la danse, le théâtre et quelques courts métrages, et plus tard des arrangements pour d’autres, et des collaborations discrètes.</p>          
            </div>
            <div class="text-1-footer">
                <div class="black-bar"></div>
            </div>
        </div>
    </div>
    <div class="columns details">
        <div class="column is-3">
            <div class="square">
                <h2>ISABELLE</h2>
                <ul class="socials">
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">SOUNDCLOUD</a></li>
                    <li><a href="#">TWITTER</a></li>
                    <li><a href="#">INSTAGRAM</a></li>
                    <li><a href="#">BANDCAMP</a></li>
                    <li><a href="#">BRATATA</a></li>
                    <li><a href="#">SKYBLOG</a></li>
                </ul>
                <div class="vertical-bar"></div>
                <div class="horizontal-bar"></div>
            </div>
            <h3>upcoming shows</h3>
            <ul class="shows">
                <li>12/10: Siberian Party, Berlin</li>
                <li>12/10: Siberian Party, Berlin</li>
                <li>12/10: Siberian Party, Berlin</li>
                <li>12/10: Siberian Party, Berlin</li>
                <li class="too-late">12/10: Siberian Party, Berlin</li>
                <li class="too-late">12/10: Siberian Party, Berlin</li>
            </ul>
            <div class="booking">
                <a href="#">BOOKING</a>
            </div>
        </div>
        <div class="column is-9">
            <div class="text-2" style="text-align:center;">
                <img src="{{ asset('images/tetes.jpg') }}" alt="" style="width:50%;">
            </div>
        </div>
    </div>
    <div class="separator">
        <div class="black-bar"></div>
    </div>
    <div class="extras">
        <div class="tile is-ancestor">
            <div class="tile is-vertical">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Je suis</p>
                            <p class="subtitle">vidéo</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                            <p class="title">Je suis</p>
                            <p class="subtitle">hyperlien</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                            <p class="title">Je suis</p>
                            <p class="subtitle">image</p>
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/640x480.png">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-danger">
                        <p class="title">Je suis</p>
                        <p class="subtitle">ton père</p>
                        <div class="content">
                        <!-- Content -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="tile is-ancestor">
            <div class="tile is-vertical">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Je suis</p>
                            <p class="subtitle">vidéo</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                            <p class="title">Je suis</p>
                            <p class="subtitle">hyperlien</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                            <p class="title">Je suis</p>
                            <p class="subtitle">image</p>
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/640x480.png">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-danger">
                        <p class="title">Je suis</p>
                        <p class="subtitle">ton père</p>
                        <div class="content">
                        <!-- Content -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="releases-artist">
        <h3>RELEASES</h3>
        <div class="releases">
            <a href="{{ route('release') }}">
                <div class="img"><img src="{{ asset('images/unnamed.jpg') }}" alt="alt"></div>
                <p class="caption">unnamed</p>
            </a>
            <a href="{{ route('release') }}">
                <div class="img"><img src="{{ asset('images/apex.jpg') }}" alt="alt"></div>
                <p class="caption">‘’APEX’’</p>
            </a>
            <a href="{{ route('release') }}">
                <div class="img"><img src="{{ asset('images/unnamed.jpg') }}" alt="alt"></div>
                <p class="caption">unnamed</p>
            </a>
        </div>
    </div>
</div>
@endsection