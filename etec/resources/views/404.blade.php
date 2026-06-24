<x-layout>
//Essa é a tela que aparece, caso um usuário tente entrar em uma tela não existente.
<div class="error-container">
    <h1>404</h1>
    <h2>Página não encontrada</h2>
        <p>
        A página que você está tentando acessar não existe ou foi removida.
        </p>

    <a href="{{ route('home') }}" class="btn-voltar">
    Voltar para Home
    </a>
</div>

</x-layout>