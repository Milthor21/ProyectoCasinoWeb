<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/Logo.png" />
    <title>Casino | @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    @stack('script')
</head>
<body>
    <div class="nav-bg">
        <nav class="navegacion-principal">
            <img src="/img/Logo2.png" alt="">
            <a href="/">Inicio</a>
            <a href="jugar">Jugar</a>
            <a href="creditos">Creditos</a>
            @auth
                <form class="boton2" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            @endauth
            @guest
                <a href="/login">Login</a>
            @endguest
    </div>
    @yield('content')

    <footer class="footer">
        <p>&copy; Todos los derechos reservados 2024</p>
    </footer>
   
</body>
</html>