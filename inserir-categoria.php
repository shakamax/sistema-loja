<?php 
	require ("layout/conexao.php");

	$categoria = $_POST['descricao'];
	$tipo = $_POST['tipo'];

 	$sql_insere_categoria = "INSERT INTO CATEGORIA (descricao, tipo) VALUES ('{$categoria}', '{$tipo}');
";

 	if ($conexao->query($sql_insere_categoria)) {
 		$msg = 'Categoria inserida com sucesso!';
 		$tipo_msg = 'success';
 	} else {
 		$msg = 'Error: Não foi possível criar categoria!';
 		$tipo_msg = 'danger';
 	}
 	header("Location: categoria.php?msg={$msg}&tipo_msg={$tipo_msg}")
 ?>