<?php

    $variables=[
        "host"=> $argv[1],
        "user"=> $argv[2],
        "password"=>$argv[3],
        "port"=> $argv[4]
    ];
 
    $connectionString = 'pgsql'
                        .":host=".$variables["host"]
                        .";port=".$variables['port']
                        .";user=".$variables['user']
                        .";password=".$variables['password'];
    $pdo = new PDO($connectionString,$variables["user"],$variables["password"]);
    echo "Criando banco de dados...\n";
    $pdo->exec("CREATE DATABASE crud_ipdv_leonardo;");
    $connectionStringCrudIpdv = 'pgsql'
                        .":host=".$variables["host"]
                        .";port=".$variables['port']
                        .";dbname=crud_ipdv_leonardo"
                        .";user=".$variables['user']
                        .";password=".$variables['password'];

    $pdoCrudIpdv = new PDO($connectionStringCrudIpdv,$variables["user"],$variables["password"]);
    echo "Criando tabelas...\n";
    

    $cmd1 = "CREATE TABLE IF NOT EXISTS cargos(
        id_cargo      SERIAL      PRIMARY KEY,
        nome_cargo    varchar(30) NOT NULL,
        descricao     varchar(60) NOT NULL
    );";
    
    $cmd2 ="CREATE TABLE IF NOT EXISTS centros_de_custo(
        id_centro_custo     SERIAL         PRIMARY KEY,
        nome_centro_custo   varchar(30)    NOT NULL        
    );";

    $cmd3 ="CREATE TABLE IF NOT EXISTS departamentos(
        id_departamento         SERIAL         PRIMARY KEY,
        nome_departamento       varchar(30)    NOT NULL,
        id_centro_custo_fk      SERIAL,   
        FOREIGN KEY (id_centro_custo_fk)        REFERENCES centros_de_custo(id_centro_custo)      
    );";

    $cmd4 = "CREATE TABLE IF NOT EXISTS usuarios(
        id_usuario            SERIAL      PRIMARY KEY ,
        nome                  varchar(60) NOT NULL,
        email                 varchar(50) NOT NULL,
        senha                 varchar(32) NOT NULL,
        dtNascimento          date,
        id_cargo_fk           SERIAL,     
        id_departamento_fk    SERIAL,      
        FOREIGN KEY (id_cargo_fk)         REFERENCES cargos(id_cargo),
        FOREIGN KEY (id_departamento_fk)  REFERENCES departamentos(id_departamento)          
    );";
 
    $pdoCrudIpdv->exec($cmd1);
    $pdoCrudIpdv->exec($cmd2);
    $pdoCrudIpdv->exec($cmd3);
    $pdoCrudIpdv->exec($cmd4);
    
?>