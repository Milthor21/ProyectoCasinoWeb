@extends('app')

@section('title')
    Jugar
@endsection

@section('content')
    
    <main class="center">
        <div class="contenedorCre">
       

            <h1>Creditos</h1>
            <div class="campo-creditos">
                <label>Tus Creditos </label>
                <span class="input-text">{{auth()->user()->credito}}</span>
            </div>
            <div class="opciones">
                @foreach ($creditos as $credito)    
                    <form action="{{ route('jugar') }}" method="POST">
                        @csrf
                        <img src="/img/{{ $credito->imagen }}">
                        <input type="hidden" name="cantidad" value="{{ $credito->cantidad }}">
                        <input class="boton" type="submit" value="Comprar">
                    </form>
                @endforeach
            </div>
            
        </div>
    </main>
@endsection