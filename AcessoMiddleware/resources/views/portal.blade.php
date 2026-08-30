<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcessoMiddleware</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-image: url('/images/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .cabecalho {
            width: 100%;
            height: 70px;
            background: linear-gradient(to bottom, #303744, #111722);
            border-radius: 0 0 70px 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cabecalho h1 {
            color: white;
            font-size: 25px;
            font-style: italic;
            font-weight: bold;
        }

        .conteudo {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 30px;
        }

        .mensagem {
            color: #d00000;
            font-size: 30px;
            font-weight: bold;
            text-decoration: underline;
            max-width: 600px;
            margin-bottom: 10px;
        }

        .recomendacao {
            color: #777;
            font-size: 16px;
            font-style: italic;
            max-width: 600px;
        }

        .rodape {
            width: 100%;
            height: 37px;
            background: linear-gradient(to bottom, #303744, #111722);
            border-radius: 25px 25px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 13px;
            font-style: italic;
            font-weight: bold;
        }

        @media (max-width: 600px) {

            .cabecalho h1 {
                font-size: 21px;
            }

            .mensagem {
                font-size: 24px;
            }

            .recomendacao {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <header class="cabecalho">
        <h1>Bem vindo ao portal:</h1>
    </header>

    <main class="conteudo">
       <div class="mensagem">{{ $mensagem }}</div>
       <div class="recomendacao">{{ $recomendacao }}</div>
    </main>

    <footer class="rodape">
        @ 2026 AcessoMiddleware. Todos os direitos reservados
    </footer>

</body>
</html>