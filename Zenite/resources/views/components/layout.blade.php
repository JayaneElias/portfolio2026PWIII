<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zênite - Clima por Região do Brasil</title>

    <style>

        *, *::before, *::after{
            box-sizing:border-box;
        }

        body {
    margin:0;
    padding:0;
    font-family:Arial, Helvetica, sans-serif;

    background:linear-gradient(
        135deg,
        #020813 0%,
        #061530 30%,
        #1a0b36 60%,
        #0a3a40 100%
    );

    background-attachment:fixed;
    color:#fff;
    min-height:100vh;

    display: flex;
    flex-direction: column;
}

        .navbar{
            background:#01040a;
            border-bottom:2px solid #00f2fe;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:20px 50px;
        }

        .logo a{
            color:white;
            text-decoration:none;
            font-size:42px;
            font-weight:bold;
            letter-spacing:3px;
        }

        .logo span{
            color:#00f2fe;
        }

        .menu{
            display:flex;
            gap:25px;
            align-items:center;
        }

        .menu a,
        .menu button{
            background:none;
            border:none;
            color:white;
            text-decoration:none;
            cursor:pointer;
            font-size:16px;
        }

        .menu a:hover,
        .menu button:hover{
            color:#00f2fe;
        }

        main{
            max-width:900px;
            margin:auto;
            padding:40px 20px;
        }

        footer{
            background:#010307;
            border-top:1px solid rgba(0,242,254,.15);
            padding:30px 20px;
            text-align:center;
            font-size:13px;
            color:#64748b;
            margin-top:40px;
        }

        .fallback-notice{
            font-size:11px;
            color:#7c3aed;
            margin-top:10px;
        }

    </style>

</head>
<body>

    <header class="navbar">

        <div class="logo">
            <a href="{{ url('/') }}">
                ZÊNI<span>TE</span>
            </a>
        </div>

        <nav class="menu">

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ route('historico') }}">
                Histórico
            </a>

            @auth

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit">
                        Sair
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}">
                    Entrar
                </a>

                <a href="{{ route('register') }}">
                    Cadastro
                </a>

            @endauth

        </nav>

    </header>

    <main>

        {{ $slot }}

    </main>

    <footer>

        <p>© 2026 Zênite Clima Brasil. Todos os direitos reservados.</p>

        <p>Dados estruturados via Migrations de Banco de Dados.</p>

        <p class="fallback-notice">
            Sistema protegido com Tratamento Global de Erros via Rota Fallback.
        </p>

    </footer>

</body>
</html>