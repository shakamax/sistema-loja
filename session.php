<?php 
	session_start();
	require ('layout/conexao.php');

	$login = $_POST['login'];
	$senha = md5($_POST['senha']);

	$sql_login = "SELECT * FROM usuario WHERE email = '{$login}' AND senha = '{$senha}';";

	$user = $conexao->query($sql_login);

	if ($user->num_rows > 0) {
		$usuario = $user->fetch_assoc();
		$SESSION['nome'] = $usuario['nome'];
		$SESSION['email'] = $usuario[''];
		$SESSION['id'] = $usuario[''];

		header("Location: principal.php?msg=Seja bem vindo {$SESSION['nome']}&tipo_msg=success");
		exit();
	} else {
		header("Location: index.php?msg=Error, acesso negado&tipo_msg=danger");
	}


 ?>