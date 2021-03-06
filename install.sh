#!/bin/sh
echo "********** CRUD - IPDV ************";
echo "Seja muito bem vindo! vamos iniciar a Instalação do software! Inicie seu apache agora caso não tenha feito e vamos começar!"
echo "********** Instalação do Banco de Dados da aplicação ************";
echo "Informe os dados de um usuário com privilégios de root no PostgreSQL... Para aceitar dados sugeridos entre colchetes, tecle [ENTER]!"
read -p "host: [localhost] " db_host
db_host=${db_host:-localhost}
read -p "username: [postgres] " db_username
db_username=${db_usrname:-postgres}
read -p "password: " db_password
read -p "port: [5432] " db_port
db_port=${db_port:-5432}
php installation_scripts/database.php $db_host $db_username $db_password $db_port
echo "********** Deploy da aplicação no servidor Apache ************";
echo "Informe o diretorio completo da raiz do apache (incluindo a pasta htdocs ou a www)... Para aceitar dados sugeridos entre colchetes, tecle [ENTER]!"
read -p "Raiz do apache: [C:/xampp/htdocs]"  apacheRoot
apacheRoot=${apacheRoot:-C:/xampp/htdocs}
cd $apacheRoot
git clone https://github.com/leoguedesf15/crud_ipdv.git
cd crud_ipdv
echo "**********************";
echo "Instalando dependencias da API..."
composer install
cd $apacheRoot
git clone https://github.com/leoguedesf15/sysipdv.git
cd sysipdv
echo "**********************";
echo "Instalando dependencias do Front e inicializando a aplicacao... Este passo demorara alguns instantes! Por favor, aguarde ..."
npm install && ng serve


