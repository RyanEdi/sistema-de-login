<?php

    $dbHost = 'localHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form-ryan';
    

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    // {
    //     echo 'Erro';
    // }
    // else{
    //     echo "Conexão efetuada com sucesso";
    // } 

?>