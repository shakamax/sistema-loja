<?php 
	session_start();
	require ('layout/conexao.php');

	$login = $_POST['login'];
	$senha = md5($_POST['senha']);

	$sql_login = "SELECT * FROM usuario WHERE email = '{$login}' AND senha = '{$senha}';";

	$user = $conexao->query($sql_login);

	if ($user->num_rows > 0) {
		$usuario = $user->fetch_assoc();
		$_SESSION['nome'] = $usuario['nome'];
		$_SESSION['email'] = $usuario[''];
		$_SESSION['id'] = $usuario[''];

		header("Location: principal.php?msg=Seja bem vindo {$_SESSION['nome']}&tipo_msg=success");
		exit();
	} else {
		header("Location: index.php?msg=Error, acesso negado&tipo_msg=danger");
	}


 ?>