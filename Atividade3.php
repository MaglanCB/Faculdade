<?php
    /*
        Como realiza conversão de dados de string para int?

        O que faz os comandos PHP unlink, fwrite e fclose?

        Converta a string: "produto1; produto2; produto3; produto4; produto5; produto6"; para um array, 
        este array terá um limite máximo de 4 valores, após mostre o resultado, 
        utilizando o comando adequado que permite visualizar que aquele valor string passou a ser do tipo array,
        conforme as diferenças levantadas na atividade 01.

        Faça um exemplo utilizando o try, catch e finally. 
        Force uma exceção e mostre uma mensagem com a determinada exceção capturada.
    */

    /* Convertendo uma string para integer: */
    $varString = "1";
    // Quando queremos converter basta passar o tipo entre ()
    $varInt = (int) $varString;
    // Imprimindo as variáveis para demonstrar o resultado:
    var_dump($integer);
    echo "<br>";
    var_dump($IntConvStr);
    /* --------------------------------------- */

    /* 
    O que faz os comandos PHP unlink, fwrite e fclose?    
        unlink — Apaga um arquivo
        fwrite — Escrita binary-safe em arquivos
        fclose — Fecha um ponteiro de arquivo aberto

        referência: https://www.php.net/manual/pt_BR/ref.filesystem.php
    */

    /* 
    Converta a string: "produto1; produto2; produto3; produto4; produto5; produto6"; para um array, 
    este array terá um limite máximo de 4 valores, após mostre o resultado, 
    utilizando o comando adequado que permite visualizar que aquele valor string passou a ser do tipo array,
    conforme as diferenças levantadas na atividade 01.    
    */

    // Criamos a string
    $strArray = "produto1; produto2; produto3; produto4; produto5; produto6";
    // Criamos o Array usando o str_split que quebra as strings em arrays,
    // Usamos o strpos para buscarmos a posição até onde deveriamos copiar a string
    // Como o retorno usa a posição dele, devemos adicionar mais 2 para ele mesmo e o espaço que há na sequência.
    $resultArray = array_slice(str_split($strArray, strpos($strArray, ";")+2, 4),0,4);
    // Imprimimos o array
    var_dump($resultArray);
    /* --------------------------------------------------------------------------------------- */

    /*
        Faça um exemplo utilizando o try, catch e finally. 
        Force uma exceção e mostre uma mensagem com a determinada exceção capturada. 
    */
    try {
        throw new Exception('Errou!');
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "<br>";
    } finally {
        echo "Mas executou o Finally.\n";
    }
?>