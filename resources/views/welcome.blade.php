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
        <div class="top">
            <h1>Top 20 mejores jugadores</h1>
            <ul>
                @foreach ($topUsers as $user)
                    <li>{{ $user->name }} <span>{{ $user->credito }}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="btn-centrar">
        <a href="{{ route('jugar') }}" class="boton btn2">Jugar</a>
    </div>
</main>
@endsection