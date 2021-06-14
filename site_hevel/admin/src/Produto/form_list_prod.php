<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
	include ("../../inc/inc_base_header.php");
	?>
</head>
<body>
	<?php include ("../../inc/inc_header.php"); ?>
	<div id="content">
		<div id="content-header">
			<h1>Lista de Produtos</h1>
		</div>
		<div id="breadcrumb">
			<a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
			<a href="form_list_prod.php" class="current">Listar Produtos</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="edt_dado.php" enctype="multipart/form-data">
						<div class="widget-box">
							<div class="widget-title">
								<h5>Lista de Produtos</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered data-table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Descrição</th>
											<th>Tamanho</th>
											<th>ComprimentoXLarguraXAltura</th>
											<th>Peso bruto (G)</th>
											<th>Peso líquido (G)</th>
											<th>Imagem interna</th>
											<th>Imagem externa</th>
										</tr>
									</thead>
									<tbody>
										<?php
											require "../../conecta.php";

											$sql = mysqli_query($con,
												"select id, tamanho, comprimento, descricao, largura, altura, pesoBruto, pesoLiquido,
												        imgInterna, imgExt 
												   from produto
												  order by id asc");
											while ($listagem = mysqli_fetch_array($sql)) {
												$id 	 	 = $listagem['id'];
												$descricao   = $listagem['descricao'];
												$tamanho     = $listagem['tamanho'];
												$comprimento = $listagem['comprimento'];
												$largura     = $listagem['largura'];
												$altura      = $listagem['altura'];
												$pesoBruto   = $listagem['pesoBruto'];
												$pesoLiquido = $listagem['pesoLiquido'];
												$imgInterna  = $listagem['imgInterna'];
												$imgExt		 = $listagem['imgExt']
										?>
											<tr class="grade_">
												<td><?php echo $id ?></td>
												<td><?php echo $descricao?></td>
												<td><?php echo $tamanho?></td>
												<td><?php echo $comprimento?> X <?php echo $largura?> X <?php echo $altura?></td>
												<td><?php echo $pesoBruto?></td>
												<td><?php echo $pesoLiquido?></td>
												<td style="max-width: 200px;max-height: 200px;"><img src="../../<?php echo $imgInterna?>" alt="<?php echo $imgInterna?>"></td>
												<td style="max-width: 200px;max-height: 200px;"><img src="../../<?php echo $imgInterna?>" alt="<?php echo $imgExt?>"></td>												
												<td>
													<a class="btn btn-small btn-primary" href="form_edt_produto.php?id=<?php echo $id ?>"/>
													<i class='icon-edit icon-white'>
													</i> Editar </a>

													<a class="btn btn-small btn-danger" href="exc_produto.php?id_exc=<?php echo $id ?>"; 
													onclick='return confirm("Deseja Remover o registro selecionado?");'>
													<i class='icon-remove-circle icon-white'>
													</i> Excluir </a>
												</td>
											</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include ("../../inc/inc_base_footer.php"); ?>
	<script src="../../js/jquery.dataTables.min.js"></script>
	<script src="../../js/unicorn.tables.js"></script>
</body>
</html>