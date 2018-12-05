<?php 
	require ("layout/conexao.php");

	$nome = $_POST['descricao'];
	$estoque = $_POST['estoque'];

	$valor = $_POST['valor'];
	$valor = str_replace('.', '', $valor);
	$valor = str_replace(',', '.', $valor);

	$id_categoria = $_POST['id_categoria'];

	$sql_insert = "INSERT INTO produto (nome, valor, estoque, id_categoria) VALUES ('{$nome}', {$valor}, {$estoque}, {$id_categoria});";

	
	if ($conexao->query($sql_insert)) {
		$msg = 'Produto cadastrado com sucesso!';
		$tipo_msg = 'success';
	} else {
		$msg = 'Error: Produto não pode ser adicionado!';
		$tipo_msg = 'danger';		
	}
	

	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}")


 ?>