<x-guest-layout>

<div class="auth-container">

    <h1>Bem-Vindo a ETEC</h1>
    <p>Realize seu Login:</p>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="password" required>
        </div>

        <div class="input-group">
            <label>RA</label>
            <input type="text" name="ra" required>
        </div>
    <p class="aviso" id="avisoSenha">
    A senha deve ter obrigatoriamente 8 caracteres
</p>

        <button type="submit">Entrar</button>

        <p>
            Não tem conta?
            <a href="{{ route('register') }}">Cadastrar</a>
        </p>

    </form>

</div>

</x-guest-layout>