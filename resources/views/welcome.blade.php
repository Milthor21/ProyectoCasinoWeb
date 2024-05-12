@extends('app')

@section('title')
    Inicio
@endsection

@section('content')
<main id="inicio" style="flex-grow: 1">
    <div class="index_banner">
        <img src="{{ asset('img/banner_ruleta.png')}}" alt="">
    </div>
    <H2>Ruleta de la fortuna</H2>
    <div class="ruleta">
        <img class="ruleta_img" src="img/rulet.png" alt="">
        <img class="ruleta_banner" src="img/POSTER.png" alt="">
    </div>
    <div class="btn-centrar">
        <a href="{{ route('jugar') }}" class="boton btn2">Jugar</a>
    </div>
</main>
@endsection