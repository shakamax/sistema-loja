<?php 
	require ('layout/conexao.php');

	$id = $_POST['id']; 
	$descricao = $_POST['descricao'];
	$tipo = $_POST['tipo'];

	$update_categoria = "UPDATE CATEGORIA SET descricao='{$descricao}', tipo='{$tipo}' WHERE id ={$id};";
	
	
	if ($conexao->query($update_categoria)){
		$msg = 'Categoria alterada com sucesso!';
		$tipo_msg = 'success';
	} else {
		$msg = 'Error: Não foi possível alterar categoria';
		$tipo_msg = 'danger';
	}



	header("Location: categoria.php?msg={$msg}&tipo_msg={$tipo_msg}");

 ?>