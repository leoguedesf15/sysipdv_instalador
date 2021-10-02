<h1>SYSIpdv</h1>  
<h2>Overview</h2>
<h3>Back-End</h3>
<p>A aplicação foi montada sob o padrão arquitetural MVC.
Busca também adaptar alguns padrões comportamentais e criacionais ao longo de sua implementação!
Arquitetura do Software é escalar!
o index está na pasta public na intenção de não ceder acesso à raiz da aplicação 
(em produção seria setado um VHost pra public)
Na raiz do projeto foi posto um .htaccess bem simples com Options -Indexes para que não seja acessado 
o diretório da aplicação através do browser.
Classes com comentários sobre a arquitetura e planejamento.</p>
<h3>Front-End</h3> 
<p>A aplicação foi construída com o Framework da Google, Angular, na versão 12. Dividida em camada de componentes e serviços. A modelagem de dados é feita através das interfaces Typescript. A aplicação consome o back em php para tráfego de informações e dados. Para o CSS foi utilizado CSS Materialize. O controle de autenticação e autorização está sendo feito pelo guarda de rotas em conjunto com a JWT (consumida do back), funcionando da seguinte maneira: O guarda de rotas verifica apenas se existe um token armazenado na sessão. Pra todos os efeitos, aos olhos do front, se existe um token a sessão é válida. Este token é passado no header das requests através do AuthInterceptor, que capta a requisição e acrescenta o header Authorization e Content-Type. O back verifica a validade do token e caso este não seja válido, o back retorna 401 e, o front, ao captar este evento, prepara o processo de "expulsão" do usuário da área restrita. </p>
<h2>Pré requisitos</h2>
<ul>
    <li>Banco de dados PostgreSQL</li>
    <li>Git</li>
    <li>PHP v7.4 (Versão testada)</li>
    <li>Composer</li>
    <li>Driver ODBC PostgreSQL para PHP</li>
    <li>Extensões pgsql e pdo_pgsql habilitadas em PHP.ini (Consulte um phpinfo())</li>
    <li>Servidor Apache</li>
    <li>Node.js com npm</li>
    <li>Framework Angular (testado com Angular 12)</li>
    <li>Angular CLI</li>
    <li>Não possuir na raiz do apache pastas com os nomes crud_ipdv e sysipdv</li>
    <li>Não possuir nenhum banco de dados no servidor com o nome de crud_ipdv_leonardo (Apesar de ser difícil rs.)</li>
</ul>
<h2>Instruções</h2>
<ul>
    <li>Você pode adquirir este instalador, baixando como zip ou clonando este repositório!</li>
    <li>Antes de iniciar a instalação tenha certeza que sua máquina atende os pré-requisitos informados acima, ou a instalação falhará!</li>
    <li>Este instalador funcionará com terminais bash!</li>
    <li>Para windows use preferencialmente Cmder ou Git Bash!</li>
    <li>Caso tenha o Git For Windows instalado, e o mesmo esteja setado como programa padrão para executar arquivos .sh, é esperado que consiga executar ao "duplo clique"!</li>
    <li>Caso não consiga, abra o terminal Git Bash ou Cmder, navegue até a pasta do projeto e execute "sh install.sh"</li>
    <li>O instalador o guiará no deploy da aplicação(back e front), serve da aplicação front, na criação do banco e importação das tabelas.</li> 
    <li>Após finalização do instalador, o mesmo deverá permanecer aberto, pois ele quem está servindo o front (com ng serve). Caso decida fechá-lo, terá que navegar pelo git bash manualmente até a pasta do projeto e executar ng serve</li>
    <li>Credenciais de acesso à área restrita: Login: admin@admin / Senha:123</li>
    <li>Após o deploy é necessário configurar o arquivo de configurações de banco da aplicação em crud_ipdv/app/database/DatabaseConnection.php</li>
    <li>Caso a instalação automática falhe, o método manual está descrito no readme de cada repositório (back e front)</li>
    <li>Incluído neste zip um arquivo de collection do postman.</li>
    <li>Para testar a API, basta importar a collection e terá acesso aos padrões das chamadas REST.</li>
    <li>Todas as chamadas são protegidas sob o token jwt. Caso não atualize o Bearer Token na aba autorização, a chamada voltará com status 401(unauthorized).</li>
    <li>Para captar um novo token basta enviar uma request para /login passando user admin@admin e senha em hash md5 da string "123"</li>
    <li>O D.E.R. encontra-se na pasta documentação deste repositório</li>
    <br>
    <a href="https://github.com/leoguedesf15/crud_ipdv" target="_blank">Instalação Manual da API</a>
    <br>
    <a href="https://github.com/leoguedesf15/sysipdv" target="_blank">Instalação Manual do Front</a>
</ul>
