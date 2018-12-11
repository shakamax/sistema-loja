<?php 
	require ('layout/conexao.php');

	$cargo = $_POST['descricao'];

	if (isset($_POST['id']) && $_POST['id'] != '') {
		$id = $_POST['id'];
		$sql_cru = "UPDATE cargo SET descricao='{$cargo}' WHERE id={$id};";
		$msg = "Alteração no cargo feita com sucesso!";
	} else {
	$sql_cru = "INSERT INTO cargo (descricao) VALUES ('{$cargo}');";
	$msg = "Cargo cadastrado com sucesso!";
	}	
	

	if ($conexao->query($sql_cru)) {
		$tipo_msg = "success";
	} else {
		$msg = "Error não foi possível salvar cargo!";
		$tipo_msg = "danger";
	}

	header("Location: cargo.php?msg={$msg}&tipo_msg={$tipo_msg}");


 ?>