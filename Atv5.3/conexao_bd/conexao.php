<?php

    $host = "localhost";
    $usuario ="root";
    $senha = "123456";
    $banco ="atividade_php";

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error){
        die("falha na conexão seu animal" . $conexao ->connect_error);

    }   
    echo   "conexão bem sucedida com o banco de dados";

?>