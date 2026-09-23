
<img src="https://capsule-render.vercel.app/api?type=waving&height=120&color=e02d2d&section=header" width="100%" style="display:block; margin:0;">

<div align="center">
  
<img src="https://capsule-render.vercel.app/api?type=cylinder&height=100&color=e32020&text=portfolio2026PWIII&reversal=true&textBg=false&fontColor=fff&fontSize=40" />

</div>
<h3 align="center">
  Atividades de 2026 da matéria do curso de Programação de Aplicativos Mobiles III.
</h3>

<br><br>

<div align="center">
  

# ★ Usando o SEEDER - ativ_seeder ★
</div>
<p> Projeto desenvolvido para a atividade de <strong>Seeders utilizando Laravel</strong>. O objetivo do projeto é criar e preencher um banco de dados utilizando <strong>Migrations, Models, relacionamentos e Seeders</strong>. </p> </div> 
                                                                                                                <br/> <br/>                                                                                                                                                                                                                                   
<div align="center">                                                                                                                          
<h2 align="center">Tecnologias utilizadas</h2> 
Laravel - PHP - MySQL - Artisan - phpMyAdmin - Composer - NPM
</div>

<br/> <br/> <br/> 

<h2 align="center">1. Criação do projeto</h2> 

<p> O projeto foi criado utilizando o instalador do Laravel. Primeiramente, foi instalado o Laravel Installer de forma global através do Composer: </p>
composer global require laravel/installer

<p> Esse comando instala o <strong>Laravel Installer</strong> globalmente no computador, permitindo criar novos projetos Laravel utilizando o comando <code>laravel new</code>. </p> <p>Depois, o projeto foi criado com:</p>
laravel new ativ_seeder

<p> Esse comando cria uma nova aplicação Laravel com o nome <strong>ativ_seeder</strong>, gerando automaticamente a estrutura inicial do projeto. </p> <p>Após a criação, foi acessada a pasta do projeto:</p>
cd ativ_seeder

<p> O comando <code>cd</code> é utilizado para acessar a pasta do projeto através do terminal. </p>


<br/> <br/> <br/> 

<h2 align="center">2. Instalação das dependências e execução</h2> <p> Depois da criação do projeto, foram instaladas as dependências do NPM: </p>
npm install

<p> O comando <code>npm install</code> instala as dependências JavaScript definidas no arquivo <code>package.json</code> do projeto. </p> <p>Em seguida, foi executado:</p>
npm run build

<p> Esse comando realiza a compilação dos arquivos do front-end, preparando os recursos necessários para a aplicação. </p> <p> Por fim, o ambiente de desenvolvimento foi iniciado através de: </p>
composer run dev

<p> Esse comando inicia o ambiente de desenvolvimento configurado para a aplicação Laravel. </p> 

<br/> <br/> <br/> 

<h2 align="center">3. Configuração do banco de dados</h2> <p> Para o projeto foi utilizado o banco de dados <strong>MySQL</strong>. O banco criado para a aplicação foi: </p> 
<p align="center"><strong>ativ_seeder</strong></p> 
<p> A conexão com o banco de dados é configurada no arquivo <code>.env</code> do Laravel. </p> <p> As informações utilizadas devem corresponder à configuração do MySQL instalado na máquina. </p>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ativ_seeder
DB_USERNAME=root
DB_PASSWORD=

<p> O arquivo <code>.env</code> contém as configurações específicas do ambiente da aplicação, incluindo os dados necessários para que o Laravel consiga acessar o banco de dados. </p> 

<br/> <br/> <br/> 

<h2 align="center">4. Migrations</h2> <p> As <strong>Migrations</strong> são utilizadas pelo Laravel para criar e modificar a estrutura do banco de dados através de código PHP. </p> <p> Neste projeto foram utilizadas três tabelas principais: </p>

<code>users</code> — responsável pelos usuários;

<code>generos</code> — responsável pelos gêneros literários;

<code>livros</code> — responsável pelos livros cadastrados.

<h3>Tabela users</h3> <p> A tabela <code>users</code> armazena os usuários cadastrados no sistema. Ela possui informações como nome, e-mail, senha e datas de criação e atualização. </p> <h3>Tabela generos</h3> <p> A tabela <code>generos</code> armazena os gêneros literários disponíveis no sistema. </p> <p>Os gêneros utilizados foram:</p>

Romance

Ficção Científica

Fantasia

Terror

Aventura

<h3>Tabela livros</h3> <p> A tabela <code>livros</code> armazena os livros cadastrados. Além das informações do livro, ela possui uma chave estrangeira que identifica o gênero ao qual o livro pertence. 

<br/> <br/> <br/> 

</p> <h2 align="center">5. Relacionamento entre as tabelas</h2> <p> O projeto possui um relacionamento entre as tabelas <strong>generos</strong> e <strong>livros</strong>. </p> <p>O relacionamento utilizado é:</p> <p> <strong>Um gênero possui vários livros.</strong><br> <strong>Um livro pertence a um gênero.</strong> </p> <p> Esse tipo de relacionamento é conhecido como <strong>One-to-Many (um para muitos)</strong>. </p> <h3>Exemplo</h3> <p> Um gênero pode possuir vários livros. Por exemplo, o gênero Romance pode estar relacionado a diferentes livros: </p>

<p> Romance </p>
<p>├── Orgulho e Preconceito</p>
<p>├── O Morro dos Ventos Uivantes</p>
<p>└── Os Noivos do Inverno</p>

<p> Ao mesmo tempo, cada livro pertence a apenas um gênero. Por exemplo: </p>
Os Noivos do Inverno
        ↓
     Romance

<p> Para realizar esse relacionamento no banco de dados, a tabela <code>livros</code> possui uma chave estrangeira que referencia a tabela <code>generos</code>. </p> <p> Essa chave estrangeira permite identificar a qual gênero cada livro pertence. </p> <h3>Relacionamento nos Models</h3> <p> O Laravel também permite representar esse relacionamento através dos Models. </p> <p> No Model <code>Genero</code>, é utilizado o relacionamento <code>hasMany</code>, indicando que um gênero possui vários livros: </p>
public function livros()
{
    return $this->hasMany(Livro::class);
}

<p> No Model <code>Livro</code>, é utilizado o relacionamento <code>belongsTo</code>, indicando que um livro pertence a um gênero: </p>
public function genero()
{
    return $this->belongsTo(Genero::class);
}

<p> Dessa maneira, o relacionamento existe tanto no banco de dados, através da chave estrangeira, quanto nos Models do Laravel. </p> <p>A partir de um gênero, é possível acessar seus livros:</p>
$genero->livros

<p>E, a partir de um livro, é possível acessar seu gênero:</p>
$livro->genero

<br/> <br/> <br/> 

<h2 align="center">6. Criação dos Seeders</h2> <p> Os <strong>Seeders</strong> são recursos do Laravel utilizados para inserir dados automaticamente no banco de dados. </p> <p> Eles são úteis durante o desenvolvimento e os testes, pois permitem cadastrar vários registros automaticamente, sem precisar inserir cada informação manualmente pelo banco. </p> <p>Neste projeto foram criados três Seeders:</p>
php artisan make:seeder UserSeeder
php artisan make:seeder GeneroSeeder
php artisan make:seeder LivroSeeder

<h3>➔ UserSeeder</h3> <p>O comando:</p>
php artisan make:seeder UserSeeder

<p> cria o arquivo <code>UserSeeder.php</code> dentro da pasta: </p>
database/seeders

<p> Esse Seeder é responsável por inserir os usuários iniciais no banco de dados. </p> <p>Foram cadastrados:</p>

Jayane Elias
João Silva
Maria Santos
Pedro Oliveira

<p> O <code>UserSeeder</code> automatiza a inserção desses usuários. Assim, quando o Seeder é executado, os registros definidos no arquivo são inseridos no banco. </p> 
<h3> ➔ GeneroSeeder</h3> <p>O comando:</p>
php artisan make:seeder GeneroSeeder

<p> cria o arquivo <code>GeneroSeeder.php</code>. </p> <p> Esse Seeder é responsável por inserir os gêneros literários utilizados no projeto. </p> <p>Foram cadastrados:</p>

Romance

Ficção Científica

Fantasia

Terror

Aventura

<h3>➔ LivroSeeder</h3> 
<p>O comando:</p>
php artisan make:seeder LivroSeeder

<p> cria o arquivo <code>LivroSeeder.php</code>. </p> <p> Esse Seeder é responsável por inserir os livros no banco de dados. </p> <p>Foram cadastrados:</p>

Orgulho e Preconceito

O Morro dos Ventos Uivantes

Duna

O Senhor dos Anéis

Drácula

As Aventuras de Tom Sawyer

Os Noivos do Inverno

<p> Além do nome do livro, o <code>LivroSeeder</code> também deve informar o gênero ao qual cada livro pertence. Essa informação é armazenada através da chave estrangeira da tabela <code>livros</code>. </p> 

<br/> <br/> <br/> 

<h2 align="center">7. Execução dos Seeders</h2> <p> Depois da criação das Migrations e dos Seeders, foi utilizado o comando: </p>
php artisan migrate:fresh --seed

<h3>migrate:fresh</h3> <p> O comando <code>migrate:fresh</code> apaga todas as tabelas existentes no banco de dados e executa novamente todas as Migrations. </p> <p> Isso permite recriar o banco de dados do zero, garantindo que sua estrutura esteja de acordo com as Migrations atuais. </p> <h3>--seed</h3> <p> A opção <code>--seed</code> informa ao Laravel que, depois de executar as Migrations, os Seeders também devem ser executados. </p> <p>Dessa forma, o processo realizado é:</p>
Apagar as tabelas existentes
          ↓
Criar as tabelas novamente
          ↓
Executar os Seeders
          ↓
Inserir os dados

<p> Assim, ao executar: </p>
php artisan migrate:fresh --seed

<p> o banco é recriado e preenchido automaticamente com os usuários, gêneros e livros definidos nos Seeders. </p>

<br/> <br/> <br/> 
<h2 align="center">8. Dados inseridos</h2> <h3>Usuários</h3>

João Silva

Maria Santos

Pedro Oliveira

Jayane Elias

<h3>Gêneros</h3>

Romance

Ficção Científica

Fantasia

Terror

Aventura

<h3>Livros</h3>
Os Noivos do Inverno
Orgulho e Preconceito
O Morro dos Ventos Uivantes
Duna
O Senhor dos Anéis
Drácula
As Aventuras de Tom Sawyer


<p> O livro <strong>Os Noivos do Inverno</strong> foi relacionado ao gênero correspondente através da chave estrangeira existente na tabela <code>livros</code>. </p> <h2 align="center">9. Validação dos dados</h2> <p> Após a execução dos Seeders, os dados foram conferidos através do <strong>phpMyAdmin</strong>. </p> <p> Foi verificado se as tabelas foram criadas corretamente e se os registros foram inseridos no banco de dados. </p> <p> Também foram verificadas as relações entre os livros e seus respectivos gêneros. </p> <p> Para visualizar os livros juntamente com seus gêneros, pode ser utilizada a seguinte consulta SQL: </p>
SELECT livros.titulo, generos.nome AS genero
FROM livros
INNER JOIN generos
ON livros.genero_id = generos.id;

<p> Essa consulta utiliza um <code>INNER JOIN</code> para relacionar os registros da tabela <code>livros</code> com os registros da tabela <code>generos</code>. </p> <p> O resultado permite verificar qual gênero está associado a cada livro. </p> 

<br/> <br/> <br/> 


<h2 align="center">10. Dump do banco de dados</h2> <p> Após a criação e validação do banco de dados, foi realizada a exportação das informações. </p> <p> O banco foi exportado para o arquivo: </p> 

<p align="center"><strong>ativ_seeder.sql</strong></p> <p> Esse arquivo contém a estrutura e os dados do banco de dados e pode ser utilizado para importar o projeto em outro ambiente. </p> 

<br/> <br/> <br/> 

<h2 align="center">11. Estrutura final do projeto</h2> <p> A estrutura principal utilizada no projeto pode ser representada da seguinte maneira: </p>
<p>◈ Laravel: ◈</p>
  
➣ Migrations
users
generos
livros
<br> 
➣ Models
 User
 Genero
 Livro
  <br>
➣ Seeders
UserSeeder
GeneroSeeder
LivroSeeder

<p> As <strong>Migrations</strong> definem a estrutura do banco, os <strong>Models</strong> representam as tabelas e seus relacionamentos dentro do Laravel, e os <strong>Seeders</strong> são responsáveis por preencher o banco com os dados iniciais. </p> <p> Dessa forma, utilizando: </p>
php artisan migrate:fresh --seed

<p> é possível recriar toda a estrutura do banco e inserir automaticamente os dados necessários para o projeto. </p>
<br/> <br/> <br/> 
<div align="center"> <h2>Desenvolvido para a atividade de Seeders — Laravel</h2> </div>


<br/> <div align="center">

# ★ AMS Laravel - Middleware ★

<p align="center">
  <img src="./Img/AcessoMiddleware.png" width="800px">
</p>


<p> Referente à aula 26.08 </p>
</div>



<br/> <br/> <br/>

<br/> <div align="center">

# ★ AMS Laravel - Mapeamento ★

<p align="center">
  <img src="./Img/MER_ams_laravel.png" width="800px">
</p>


<p> Referente à aula 19.08 </p>
</div>

  <h3> Projeto de Mapeamento Objeto-Relacional em Tempo Real, utilizando o Laravel e o MySQL. Definimos algumas entidades básicas para demonstrar o relacionamento entre elas.
</h3>

## As Tabelas são:

**Users:** *armazena e registra os usuários.*

**Profiles:** *armazena o perfil que o usuário possui.*

**Posts:** *armazena as publicações e conteúdos dos usuários.*

**Tags:** *armazena tags (tópicos) de interesse dos usuários.*

<br>

## Relacionamentos:
**Tabela users 1 — 1 Tabela profiles**

**Tabela users 1 — N Tabela posts**

**Tabela posts N — M Tabela tags**, utilizando a tabela `post_tag` como tabela pivô.

</div>

<br/>

<br/> <div align="center">
# ★ Telas do Projeto - ETEC ★


<p align="center">
  <img src="./Img/Etec.gif" heigth="300px">
</p>

| Tela de Login | Tela de Cadastro |
|---------------|------------------|
| <img src="Img/login_etec.jpeg" height="200px"> | <img src="Img/cadastro_etec.jpeg" height="200px"> |

<br/>

| Tela Home | Tela Cursos | Tela Eventos |
|-----------|-------------|--------------|
| <img src="Img/home_etec.jpeg" height="200px"> | <img src="Img/cursos_etec.jpeg" height="200px"> | <img src="Img/eventos_etec.jpeg" height="200px"> |

<br/>

| Tela Sobre | Tela Fallback |
|------------|---------------|
| <img src="Img/sobre_etec.jpeg" height="200px"> | <img src="Img/fallback_etec.jpeg" height="200px"> |


<br/> 

##

<br/> 


# ★ Telas do Projeto - Zênite ★

<p align="center">
  <img src="./Img/Zenite.gif" heigth="300px">
</p>

| Tela Login | Tela de Cadastro | Tela Home |
|------------------|--------------------------|-------------------------|
| <img src="Img/login_Zenite.jpeg" heigth="200px"> | <img src="Img/cadastro_Zenite.jpeg" heigth="200px"> | <img src="Img/Home_Zenite.jpeg" heigth="200px"> |
<br/>

| Tela Relatótio | Tela do Histórico | Tela FallBack |
|------------------|--------------------------|-------------------------|
| <img src="Img/Relatorio_Zenite.jpeg" heigth="200px"> | <img src="Img/Historico_Zenite.jpeg" heigth="200px"> | <img src="Img/Rota_FallBack.jpeg" heigth="200px"> |

<br/><br/>


<img src="https://capsule-render.vercel.app/api?type=waving&height=120&color=e02d2d&section=footer" width="100%" style="display:block; margin:0;">
