<?php
    /*
        Descreva e explique a diferença do uso de aspas simples’’ e duplas”” no PHP.
        Crie um exemplo de cada demonstrando a diferença.
        
        Aspas simples não identifica variavel, portanto não busca seu conteúdo e imprime o nome da variável.
        Aspas duplas identifica, portanto ao imprimir ao invés de imprimir o nome, imprime o valor da variável.
    */
    // Declaramos a variável
    $m = "mundo";
    echo 'Olá $m.'; // Resultado: Olá $m.

    echo "<br>"; // Quebra de linha.

    echo "Olá $m."; // Resultado: Olá mundo.
?>
