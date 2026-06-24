<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">

    <title>ETEC</title>
    <link rel="icon" type="image/png" href="{{ asset('img/etec.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="auth-page">

    {{ $slot }}


    <script>

const senha = document.getElementById('password');
const confirmar = document.getElementById('password_confirmation');
const aviso = document.getElementById('avisoSenha');


function validarSenha(){

    if(senha.value.length === 0){
        aviso.innerHTML = "";
        aviso.style.display = "none";
        return;
    }


    if(senha.value.length < 8){

        aviso.innerHTML = 
        "⚠ A senha precisa ter no mínimo 8 caracteres";

        aviso.style.color = "#b71c1c";
        aviso.style.display = "block";

    }else{

        aviso.innerHTML =
        "✔ Senha válida";

        aviso.style.color = "green";
        aviso.style.display = "block";
    }


    if(confirmar.value.length > 0){

        if(senha.value !== confirmar.value){

            aviso.innerHTML =
            "⚠ As senhas não coincidem";

            aviso.style.color = "#b71c1c";

        }else{

            aviso.innerHTML =
            "✔ Senhas corresponde";

            aviso.style.color = "green";
        }
    }
}


senha.addEventListener('input', validarSenha);
confirmar.addEventListener('input', validarSenha);

</script>

</body>
</html>