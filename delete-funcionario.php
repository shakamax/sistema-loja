<?php 
	require ('layout/conexao.php');

	$id = $_GET['id'];

	$sql_del = "DELETE FROM funcionarios WHERE (id = {$id});";

	
	if ($conexao->query($sql_del)) {
		$msg = "Funcionário excluído com sucesso!";
		$tipo_msg = "warning";
	} else {
		$msg = "Error, não foi possível excluir funcionário!";
		$tipo_msg = "danger";
	}


	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>