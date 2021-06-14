<?php
	require "../../conecta.php";
	require "../../lib/funcoes.php";

	$id_exc = (isset($_GET['id_exc']))?$_GET['id_exc']: 0;
		mysqli_query($con,"delete from produto where id = {$id_exc} ") or die(mysqli_error($con));
	;
	header("Location: form_list_prod.php");
?>