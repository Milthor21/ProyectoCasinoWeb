@extends('app')

@section('title')
    Login
@endsection

@section('content')
<main class="center">
    <form class="formulario" method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset>
            <img src="../img/Logo.png">
            <div class="contenedor-campos">
                <div class="campo">
                    <label>Usuario</label>
                    <input class="input-text" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="error">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                
                <div class="campo">
                    <label>Correo</label>
                    <input class="input-text" type="email"  placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="error">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="campo">
                    <label>Contraseña</label>
                    <input class="input-text" type="password"  placeholder="********" name="password" value="{{ old('password') }}">
                    @error('password')
                        <p class="error">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="campo">
                    <label>Repita  Contraseña</label>
                    <input class="input-text" type="password"  placeholder="********" name="password_confirmation">
                </div>
            </div> <!-- .contenedor-campos -->
            <div class="Registrarse">
                <div>
                    <input class="boton " type="submit" value="Registrarse">
                </div>
                
            </div>
        </fieldset>
    </form>
</main>
@endsection