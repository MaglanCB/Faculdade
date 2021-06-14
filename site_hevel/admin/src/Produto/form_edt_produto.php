<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include ("../../inc/inc_base_header.php");
    ?>
</head>
<body>
    <?php
    include ("../../inc/inc_header.php");
    ?>
    <div id="content">
        <div id="content-header">
            <h1>Editar produto</h1>
            <?php
                require "../../conecta.php";

                $id = (isset($_GET['id']) ? $_GET['id'] : 0);

                $sql = mysqli_query($con, 
                    "select id, tamanho, comprimento, descricao, largura, altura, pesoBruto, pesoLiquido,
                            imgInterna, imgExt
                       from produto
                      where id = $id") or
                    die(mysqli_error($con));

                $listagem = mysqli_fetch_assoc($sql);
            ?>
        </div>
        <div id="breadcrumb">
            <a href="dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="form_add_prod.php" class="current">Editar produto <?php echo $listagem['id'] . ' - ' . $listagem['descricao'] ?> </a>
        </div>
        <div class="container-fluid">
            <?php
            include ("../../inc/inc_loading.php");
            ?>
            <div class="row-fluid">
                <div class="span12">
                    <form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="edt_produto.php?id_edt=<?php echo $listagem['id'] ?>">
                        <div class="control-group">
                            <label class="control-label" for="inp_desc">Descrição*</label>
                            <div class="controls">
                                <input type="text" name="inp_desc" id="inp_desc" class="input-xlarge" value="<?php echo $listagem['descricao'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_tam">Tamanho*</label>
                            <div class="controls">
                                <input type="text" name="inp_tam" id="inp_tam" class="input-xlarge" value="<?php echo $listagem['tamanho'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_comp">comprimento*</label>
                            <div class="controls">
                                <input type="number" name="inp_comp" id="inp_comp" class="input-xlarge" value="<?php echo $listagem['comprimento'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_larg">largura*</label>
                            <div class="controls">
                                <input type="number" name="inp_larg" id="inp_larg" class="input-xlarge" value="<?php echo $listagem['largura'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_alt">altura*</label>
                            <div class="controls">
                                <input type="number" name="inp_alt" id="inp_alt" class="input-xlarge" value="<?php echo $listagem['altura'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_pbruto">Peso bruto em gramas*</label>
                            <div class="controls">
                                <input type="number" name="inp_pbruto" id="inp_pbruto" class="input-xlarge" value="<?php echo $listagem['pesoBruto'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_pliquido">Peso líquido em gramas*</label>
                            <div class="controls">
                                <input type="number" name="inp_pliquido" id="inp_pliquido" class="input-xlarge" value="<?php echo $listagem['pesoLiquido'] ?>">
                            </div>
                        </div>
                        <div class="control-group">                            
                            <img class="card-img-top" src="<?php echo '../../'.$listagem['imgInterna'] ?>" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Imagem interna</h5>
                            </div>
                            <label class="control-label" for="inp_imgImp">Carregar nova imagem*</label>
                            <div class="controls">
                                <input type="file" name="inp_imgImp" id="inp_imgImp" class="input-xlarge" value="" >
                            </div>
                        </div>
                        <div class="control-group">
                            <img class="card-img-top" sizes="200x200" src="<?php echo '../../'.$listagem['imgExt'] ?>" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Imagem externa</h5>
                            </div>
                            <label class="control-label" sizes="200x200" for="inp_imgExt">Carregar nova imagem*</label>
                            <div class="controls">
                                <input type="file" name="inp_imgExt" id="inp_imgExt" class="input-xlarge" value="" >
                            </div>
                        </div>    
                        <div class="control-group">
                            <div class="controls">
                                <div class="alert alert-danger">
                                    (*) Campos com preenchimento obrigatório;
                                </div>
                            </div>
                        </div>
                    <?php
                        include ("../../inc/inc_submit.php");
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include ("../../inc/inc_base_footer.php");
?>
<!--Esta função é chamada no nosso botão para abrir uma caixa de dialogo mais bonitinha para receber a msg   -->
<script>
    function alert_msg() {
        $('#alert_modal').modal('show');
        $('#alert_modal p').html("");
        $('#alert_footer').html("");
    }
</script>

<script>
    $('#frm_cad').ajaxForm({
        success : function(resposta) {
            $('#alert_modal p').append(resposta);
            $('#alert_footer').append("<a href='#' class='btn btn-primary'>Fechar</a>");
        }
    });
</script>
</body>
</html>
