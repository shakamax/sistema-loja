<?php 
	require ("layout/conexao.php");

	$nome 			= $_POST['descricao'];
	$estoque 		= $_POST['estoque'];

	$valor 			= $_POST['valor'];
	$valor 			= str_replace('.', '', $valor);
	$valor 			= str_replace(',', '.', $valor);

	$id_categoria 	= $_POST['id_categoria'];
	$id 			= $_POST['id'];


	if ($id != '') {

		$sql_produto = "UPDATE produto SET nome='{$nome}', valor= {$valor}, estoque= {$estoque}, id_categoria= {$id_categoria} WHERE id= {$id};";
		$msg = 'Produto alterado com sucesso.';

	} else {

		$sql_produto = "INSERT INTO produto (nome, valor, estoque, id_categoria) VALUES ('{$nome}', {$valor}, {$estoque}, {$id_categoria});";
		$msg = 'Produto cadastrado com sucesso!';
		
	}

	
	if ($conexao->query($sql_produto)) {
		$tipo_msg = 'success';
	} else {
		$msg = 'Error: Produto não pode ser salvo!';
		$tipo_msg = 'danger';		
	}
	

	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}")


 ?>