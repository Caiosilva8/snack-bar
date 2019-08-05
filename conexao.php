<?php

    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "lojavirtual";

    $conexao = mysqli_connect($local,$usuario,$senha,$banco);

    //echo "Banco de Dados OK";
   // header("Content_Type: text/html; charset=utf-8");
    mysqli_query($conexao,"SET NAMES 'utf8'");
    mysqli_query($conexao,"SET caracter_set_connection = utf8");
    mysqli_query($conexao,"SET caracter_set_client = utf8");
    mysqli_query($conexao,"SET caracter_set_results = utf8");
?>