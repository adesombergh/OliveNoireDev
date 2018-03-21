@extends('layouts.app')
@section('content')
<?php $a = ["ISABELLE","UnU","LOWI ORSOVA"]; ?>
    <ul class="artists">
        @foreach( $a as $name)
            <li><a href="#" style="padding:{{mt_rand(0,50)}}px {{mt_rand(7,70)}}% {{mt_rand(0,50)}}px {{mt_rand(7,70)}}%;">{{$name}}</a></li>
        @endforeach
    </ul>
@endsection