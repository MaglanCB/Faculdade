<?php
    //chamamos nossa conexão com o banco.
    require "../../conecta.php";
    //chamar nossas bibliotecas para validar nossa informação recebida e retornar nossa msg.
    require "../../lib/funcoes.php";

    // Grava imagem externa
    if(isset($_FILES['inp_imgExt'])) {
        $ext = strtolower(substr($_FILES['inp_imgExt']['name'],-4)); //Pegando extensão do arquivo
        $extNew_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $extDir = '../../img/produto/'; //Diretório para uploads 
        move_uploaded_file($_FILES['inp_imgExt']['tmp_name'], $extDir.$extNew_name); //Fazer upload do arquivo
        $caminhoExp='img/produto/'.$extNew_name;
    } else {
        echo("Imagem externa não informada!");
        exit;
    }

    // Grava imagem externa
    if(isset($_FILES['inp_imgImp'])) {
        $extImp = strtolower(substr($_FILES['inp_imgImp']['name'],-4)); //Pegando extensão do arquivo        
        $impNew_name = date("Y.m.d-H.i.s") . $extImp; //Definindo um novo nome para o arquivo
        $imptDir = '../../img/produto/'; //Diretório para uploads 
        move_uploaded_file($_FILES['inp_imgImp']['tmp_name'], $imptDir.$impNew_name); //Fazer upload do arquivo
        $caminhoImp='img/produto/'.$impNew_name;
    } else {
        echo("Imagem interna não informada!");
        exit;
    }

    $id          = validacao($_POST['inp_id']);
    $descricao   = validacao($_POST['inp_desc']);
    $tamanho     = validacao($_POST['inp_tam']);
    $comprimento = validacao($_POST['inp_comp']);
    $largura     = validacao($_POST['inp_larg']);
    $altura      = validacao($_POST['inp_alt']);
    $pesoBruto   = validacao($_POST['inp_pbruto']);
    $pesoLiquido = validacao($_POST['inp_pliquido']);
    
    $sql = 
    "insert produto set id = '{$id}',
                        descricao = '{$descricao}', 
                        tamanho = '{$tamanho}',                               
                        comprimento = '{$comprimento}',
                        largura = '{$largura}',
                        altura = '{$altura}',
                        pesoBruto = '{$pesoBruto}',
                        pesoLiquido = '{$pesoLiquido}',
                        imgInterna = '{$caminhoImp}',
                        imgExt = '{$caminhoExp}'";
    
    // Executa nossa query
    if (!(mysqli_query($con,$sql))) {
        die(mysqli_error($con));        
        exit ;
    }
    get_success_msg("Dados Cadastrados com Sucesso");
?>