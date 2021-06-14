<?php   
    /*
        Descreva e explique a diferença dos comandos echo, var_dump, print_r e
    print que são utilizados para imprimir o conteúdo em uma página.
        Crie um exemplo de cada comando.
    */
    echo "<h1>Meu primeiro comando PHP</h1>";
    // Declaramos um array
    $vetor = array('João', 'Maria');
   
    // echo somente imprime variáveis, sem retorno
    echo $vetor[0];    
    echo "<br><br>";

    // O Print pode ser usado para imprimir variáveis,
    // ou ser usado como retorno para funcions conforme mostrado abaixo:
    print($vetor[0]);
    echo "<br><br>";

    function get_warning_msg($mensagem){
        return print ("<div class='alert alert-warning'>". $mensagem . "</div>");
    }
    get_warning_msg("Testes");
    echo "<br><br>";

    // O var_dump imprime os dados contidos em uma variável, juntamente com o tipo e tamanho, 
    // se for um vetor exibirá as posições correspondentes a posição atual.
    // Pode ser impresso uma variável ou um vetor
    var_dump($vetor);
    echo "<br><br>";

    // O print_r semelhante ao var_dump pode imprimir os dados, o tipo e o tamanho de uma 
    // variável ou de um vetor, posição à posição, sendo uma exibição mais "bonita" para o
    // usuário.
    print_r($vetor);
    echo "<br><br>";
?>