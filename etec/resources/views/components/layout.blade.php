<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>ETEC</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/etec.png') }}">
</head>

<body>

<header>

    <div class="logo">
        <img src="{{ asset('img/etec.png') }}" alt="logo">
    </div>

    <nav>

        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>

        <a href="/cursos" class="{{ request()->is('cursos') ? 'active' : '' }}">Cursos</a>

        <a href="/eventos" class="{{ request()->is('eventos') ? 'active' : '' }}">Eventos</a>

        <a href="/sobre" class="{{ request()->is('sobre') ? 'active' : '' }}">Sobre</a>

    </nav>

    <div class="user">

       @auth

<div class="user-area">

    <div class="avatar">

        {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        {{ strtoupper(substr(explode(' ', Auth::user()->name)[1] ?? '',0,1)) }}

    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="logout-btn">
            Sair
        </button>
    </form>

</div>

@else

<div class="guest-area">

    <a href="{{ route('login') }}" class="auth-btn">
        Login
    </a>

    <a href="{{ route('register') }}" class="auth-btn">
        Cadastro
    </a>

</div>

@endauth

    </div>

</header>

<main>
    {{ $slot }}
</main>

<footer>
    © ETEC - Todos os direitos reservados
</footer>

</body>
</html>