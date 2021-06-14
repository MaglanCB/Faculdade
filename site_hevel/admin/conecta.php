<?php
    $host = "localhost:3306";
    $usuario = "root"; // usuário do banco
    $s = ""; // Senha do banco
    $dbuse = "auladb"; // Nome do banco

    // Cria a conexão
    $con = mysqli_connect($host, $usuario, $s, $dbuse);

    // Testa se a conexão funcionou
    if (!$con){
        echo "Erro de conexão ao banco de dados!";
        exit;
    }
?>