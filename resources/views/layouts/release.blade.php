@extends('layouts.app')

@section('content')
<div class="container release">
    <div class="pochette">
        <img src="{{ asset('images/apex.jpg') }}" alt="Pochette">
    </div>
    <h2>APEX by ISABELLE</h2>
    <div class="columns">
        <div class="column is-3">
            <ul>
                <li>INDEX</li>
                <li>DATE</li>
                <li>FORMAT(s)</li>
            </ul>
        </div>
        <div class="column is-9">TEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PASTEXTE / OU PAS</div>
    </div>
    <div class="morceaux">
        <ol>
            <li>Al Fin</li>
            <li>Tape Rec</li>
            <li>Bonne Amie</li>
            <li>Night Rungs</li>
            <li>Oppose</li>
            <li>Misme</li>
        </ol>
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
    </div>
    <div class="buy">
        <h3>PURCHASE</h3>
        <ul>
            <li><a href="#">DEEZER</a></li>
            <li><a href="#">TIDAL</a></li>
            <li><a href="#">ITUNE</a></li>
            <li><a href="#">BANDCAMP</a></li>
        </ul>
    </div>
    <div class="big-button">
        <a href="#">
            ARTIST PROFILE
        </a>
    </div>
</div>
@endsection