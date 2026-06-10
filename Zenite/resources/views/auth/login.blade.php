<x-layout>

<style>
    .auth-box{
        max-width:400px;
        margin:60px auto;
        padding:30px;
        background:rgba(2,8,19,.85);
        border:1px solid rgba(0,242,254,.2);
        border-radius:10px;
    }

    .auth-box h2{
        text-align:center;
        margin-bottom:20px;
        color:#00f2fe;
    }

    .auth-box input{
        width:100%;
        padding:12px;
        margin-bottom:12px;
        border-radius:6px;
        border:1px solid rgba(124,58,237,.3);
        background:rgba(255,255,255,.05);
        color:#fff;
        outline:none;
    }

    .auth-box button{
        width:100%;
        padding:12px;
        border:none;
        border-radius:6px;
        background:linear-gradient(90deg,#7c3aed,#00f2fe);
        color:white;
        font-weight:bold;
        cursor:pointer;
    }

    .auth-box a{
        color:#00f2fe;
        text-decoration:none;
        font-size:13px;
        display:block;
        text-align:center;
        margin-top:10px;
    }

    .error{
        color:#ff6b6b;
        font-size:13px;
        margin-bottom:10px;
    }
</style>

<div class="auth-box">

    <h2>Login</h2>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

   <form method="POST" action="{{ route('login.store') }}">

        @csrf

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Senha" required>

        <button type="submit">Entrar</button>
    </form>

    <a href="{{ route('register') }}">Não tem conta? Criar cadastro</a>

</div>

</x-layout>