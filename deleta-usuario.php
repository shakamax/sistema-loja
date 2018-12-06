<?php 
	require ("layout/conexao.php");

	$id = $_GET['id'];

	$sql_deleta = "DELETE FROM usuario WHERE id={$id};";

	if ($conexao->query($sql_deleta)) {
		$msg = "Usuário excluído com sucesso!";
		$tipo_msg = "warning";
	} else {
		$msg = "Usuário não pode ser excluído";
		$tipo_msg = "danger";
	}

	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>