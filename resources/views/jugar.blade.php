@extends('app')

@section('title')
    Jugar
@endsection

@section('content')
    <main class="center">
        <div style="width: 100%">
            <h1 style="font-size: 3rem; text-align: center">La ruleta de Golden Destiny</h1>
        <section id="juego"></section>
        </div>
    </main>
@endsection

@push('script')
    <link href="/css/juego.css" rel="stylesheet">
    <script src="/js/app.js" defer></script>
@endpush