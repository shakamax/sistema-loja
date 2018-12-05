<?php 
	require ('layout/conexao.php');

	$id = $_POST['id']; 
	$descricao = $_POST['descricao'];

	$update_categoria = "UPDATE categoria SET descricao = '{$descricao}' WHERE id = {$id};";
	
	
	if ($conexao->query($update_categoria)){
		$msg = 'Categoria alterada com sucesso!';
		$tipo_msg = 'success';
	} else {
		$msg = 'Error: Não foi possível alterar categoria';
		$tipo_msg = 'danger';
	}



	header("Location: categoria.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>