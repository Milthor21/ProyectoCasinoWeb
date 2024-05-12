@extends('app')

@section('title')
    Login
@endsection

@section('content')
<main class="center">
    <form class="formulario" method="POST" action="{{ route('login') }}">
        @csrf
        <fieldset>
            <img src="/img/Logo.png">
            <div class="contenedor-campos">
                    
                <div class="campo">
                    <label>Correo</label>
                    <input class="input-text" type="email"  placeholder="Email" name="email">
                </div>
                <div class="campo">
                    <label>Contraseña</label>
                    <input class="input-text" type="password"  placeholder="********" name="password">
                </div>
                
            </div> <!-- .contenedor-campos -->
            <div class="Registrarse">
                <div>
                    <input class="boton" type="submit" value="Iniciar sesión">
                </div>
                
            </div>
        </fieldset>
        <div class="Registro">
            <label>¿No tienes una cuenta? Registrate aqui</label>
            <a href="/registrarse">Registrarse</a></div>
    </form>
</main>
@endsection