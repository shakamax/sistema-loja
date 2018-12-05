<?php 
	require ("layout/conexao.php");

	$id = $_GET['id'];

	$sql_delete = "DELETE FROM categoria WHERE id = {$id};";

	if ($conexao->query($sql_delete)) {
		$msg = 'Categoria excluida com sucesso!';
		$tipo_msg = 'warning';
	} else {
		$msg = 'Error: Não foi possível excluir categoria!';
		$tipo_msg = 'danger';
	}
	
	header("Location: categoria.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>