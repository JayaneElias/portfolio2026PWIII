<x-guest-layout>
<x-input-error :messages="$errors->get('password')" class="mt-2" />
<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
<div class="auth-container">

    <h1>Bem-Vindo a ETEC</h1>
    <p>Realize seu Cadastro:</p>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="name" required>
        </div>

        <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label>RA</label>
            <input type="text" name="ra" required>
        </div>

        
        <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="password"  id="password" required>
        </div>

         
        <div class="input-group">
            <label>Confirmar Senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <p class="aviso" id="avisoSenha"> A senha deve ter obrigatoriamente 8 caracteres </p>
        <button type="submit">Cadastrar</button>

        <p> Já tem conta? <a href="{{ route('login') }}">Entrar</a> </p>

    </form>

</div>

</x-guest-layout>