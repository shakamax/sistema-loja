<?php 
	
	require ("layout/conexao.php");
	$id = $_GET['id'];

	$sql_deleta_produto = "DELETE FROM produto WHERE id={$id};
";
	
	if ($conexao->query($sql_deleta_produto)) {
		$msg = "Produto foi excluído com sucesso!";
		$tipo_msg = "success";
	} else {
		$msg = "Produto não pode ser excluído";
		$tipo_msg = "danger";
	}
	
	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>