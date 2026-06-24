<x-layout> // O x-layout foi criado para evitar repetir código.
// Nele ficam elementos que aparecem em todas as páginas,


<div class="home">
// As Views são as telas que o usuário vê ao utilizar o sistema.
// Nesse projeto eu criei as telas: home, cursos,
// eventos e sobr, alguns terão texto fixos outros adicionados com banco de dados
// É a interface que permite a navegação entre as áreas do site.

    <div class="infra">
        <img src="{{ asset('img/infraestrutura.jpeg') }}">
    </div>

    <div class="textos">
        <div class="box azul">
            A ETEC da Zona Leste possui estrutura moderna
            com laboratórios e salas equipadas.
        </div>
        
        <div class="box amarelo">
            Ensino técnico de qualidade integrado ao mercado
            de trabalho.
    </div>
    </div>

</div>

</x-layout>