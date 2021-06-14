<?php    
    require "../../conecta.php";
	require "../../lib/funcoes.php";

    $id = validacao($_GET['id_edt']);

    // verificar se a senha antiga confere.
	$sql = mysqli_query($con,
        "select id, descricao, tamanho, comprimento, largura, altura, pesoBruto, pesoLiquido, imgInterna, imgExt
           from produto
          where id= $id") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql);


    // Grava imagem externa
    if(isset($_FILES['inp_imgExt'])) {
        $ext = strtolower(substr($_FILES['inp_imgExt']['name'],-4)); //Pegando extensão do arquivo
        $extNew_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $extDir = '../../img/produto/'; //Diretório para uploads 
        move_uploaded_file($_FILES['inp_imgExt']['tmp_name'], $extDir.$extNew_name); //Fazer upload do arquivo
        $caminhoExp='img/produto/'.$extNew_name;
    } else {
        $caminhoExp = $row['imgExt'];
    }

    // Grava imagem externa
    if(isset($_FILES['inp_imgImp'])) {
        $extImp = strtolower(substr($_FILES['inp_imgImp']['name'],-4)); //Pegando extensão do arquivo        
        $impNew_name = date("Y.m.d-H.i.s") . $extImp; //Definindo um novo nome para o arquivo
        $imptDir = '../../img/produto/'; //Diretório para uploads 
        move_uploaded_file($_FILES['inp_imgImp']['tmp_name'], $imptDir.$impNew_name); //Fazer upload do arquivo
        $caminhoImp = 'img/produto/'.$impNew_name;
    } else {
        $caminhoImp = $row['imgInterna'];
    }


    //verificar se retornou algo.
	if (!isset($row['id'])) {
		get_error_msg("Senha incorreta, tente novamente");
	}else{
	    // Caso esteja correta faz update na senha.
        $descricao   = isset($_POST['inp_desc'])?$_POST['inp_desc']:$row['descricao'];
        $tamanho     = isset($_POST['inp_tam'])?$_POST['inp_tam']:$row['tamanho'];
        $comprimento = isset($_POST['inp_comp'])?$_POST['inp_comp']:$row['comprimento'];
        $largura     = isset($_POST['inp_larg'])?$_POST['inp_larg']:$row['largura'];
        $altura      = isset($_POST['inp_alt'])?$_POST['inp_larg']:$row['altura'];
        $pesoBruto   = isset($_POST['inp_pbruto'])?$_POST['inp_pbruto']:$row['pesoBruto'];
        $pesoLiquido = isset($_POST['inp_pliquido'])?$_POST['inp_pliquido']:$row['pesoLiquido'];

		$sql = 
        "update produto set descricao = '{$descricao}',
                            tamanho = '{$tamanho}',
                            comprimento = '{$comprimento}',
                            largura = '{$largura}',
                            altura = '{$altura}',
                            pesoBruto = '{$pesoBruto}',
                            pesoLiquido = '{$pesoLiquido}'
		  where id = '{$id}'";

		if (!(mysqli_query($con,$sql))){
			die(mysqli_error($con));
			exit;
		}
		get_success_msg("Produto $descricao Alterado com sucesso!");
	}
?>