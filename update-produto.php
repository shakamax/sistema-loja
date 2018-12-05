<?php 
	require ('layout/conexao.php');

	$id = $_POST['id'];
	$nome = $_POST['descricao'];

	$valor = $_POST['valor'];
	$valor = str_replace('.', '', $valor);
	$valor = str_replace(',', '.', $valor);

	$qnt = $_POST['estoque'];
	$categoria = $_POST['id_categoria'];

	$sql_update = "UPDATE produto SET nome='{$nome}', valor= {$valor}, estoque= {$qnt}, id_categoria= {$categoria} WHERE id= {$id};";

	if ($conexao->query($sql_update)) {
		$msg = "Produto foi alterado com sucesso!";
		$tipo_msg = "success";
	} else {
		$msg = "Error =  não foi possível alterar categoria.";
		$tipo_msg = "danger";
	}


	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}")
	
 ?>