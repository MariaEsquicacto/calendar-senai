<?php

// Conectar ao banco de dados
    $dbHost = "localhost"; // ou o seu servidor de banco de dados
    $dbUsername = "root"; // seu usuário do MySQL
    $dbpassword = ""; // sua senha do MySQL
    $dbname = "eventos"; // nome do seu banco de dados

    $conexao = new mysqli($dbHost, $dbUsername, $dbpassword, $dbname);

// Verificar conexão
    // if ($conexao->connect_errno) 
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>