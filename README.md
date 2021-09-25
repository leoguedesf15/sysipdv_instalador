<h1>[SYS - IPDV]</h1>   
<h2>Pré requisitos</h2>
<ul>
    <li>Banco de dados PostgreSQL</li>
    <li>PHP v7.4 (Versão testada)</li>
    <li>Servidor Apache</li>
    <li>Node.js com npm</li>
    <li>Framework Angular (testado com Angular 12)</li>
</ul>
<h2>Instruções</h2>
<ul>
    <li>Este instalador funcionará com terminais bash!</li>
    <li>Para windows use Cmder ou Git Bash!</li>
    <li>Caso tenha o Git For Windows instalado, é esperado que consiga executar ao "duplo clique"!</li>
    <li>Caso não consiga, abra o terminal Git Bash ou Cmder, navegue até a pasta do projeto e execute "sh install.sh"</li>
    <li>O instalador o guiará no deploy da aplicação(back e front), build da aplicação, na criação do banco e importação das tabelas.</li> 
    <li>Após o deploy é necessário configurar o arquivo de configurações de banco da aplicação</li>
    <li>Caso a instalação automática falhe, o método manual está descrito no readme de cada repositório (back e front)</li>
    <li>Incluído neste zip um arquivo de collection do postman.</li>
    <li>Para testar a API, basta importar a collection e terá acesso aos padrões das chamadas REST.</li>
    <li>Todas as chamadas são protegidas sob o token jwt. Caso não atualize o Bearer Token na aba autorização, a chamada voltará com status 401(unauthorized).</li>
    <li>Para captar um novo token envie uma request para /login</li>
    <li>O D.E.R. encontra-se na pasta documentação</li>
    <br>
    <a href="#">Instalação Manual da API</a>
    <br>
    <a href="#">Instalação Manual do Front</a>
</ul>