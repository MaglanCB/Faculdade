<?php
    /*
    Explique com suas palavras a função do método foreach no PHP, 
    descreva um exemplo fazendo seu uso e mostrando o resultado
    */

    /*
        O ForEach é usado somente em array's e objetos, e ele seria um for que percorre
        todas as posições onde a cada posição ele pega o valor e atribui a uma variável 
        pronta para uso, caso tente acessar com outro tipo ele emitira um erro.
        A principal diferença dele par um For é que não precisamos controlar o indice.
    */
    $vetor = ["Arquivo 1", "Arquivo 2", "Arquivo 3"];
    foreach ($vetor as $key => $value) {
        $tipo = gettype($value);
        print("Valor: $value tipo: $tipo <br>");
    }
?>