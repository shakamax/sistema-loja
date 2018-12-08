<?php 
	require ('layout/conexao.php');

	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$senha  = $_POST['senha'];
	$confirmasenha = $_POST['confirmasenha'];
	$id = $_POST['id'];

	$nova_senha = md5($senha);
	echo $id;

	if ($id != '') {
	$sql_senha = "SELECT * FROM usuario WHERE id = {$id}";
	$dadousuario = $conexao->query($sql_senha);
	$senhabd = $dadousuario->fetch_assoc();		
	}


	if (($id == '') && ($senha == $confirmasenha)  ) {
		$sql_usario = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$nova_senha}');";
		$msg = "Usuário criado com sucesso!";		

	} else if (($id != '') && ($nova_senha == $senhabd['senha'])) {
		$sql_usario = "UPDATE usuario SET nome='{$nome}', email='{$email}' WHERE id= {$id};";
		$msg = "Usuário alterado com sucesso!";

	} else if (($id != '') && ($senha != '')) {
		if ($senha != $confirmasenha) {
		$msg = 'Senhas digitadas não conferem';
		$tipo_msg = 'warning';
		header("Location: salvar-usuario.php?msg={$msg}&tipo_msg={$tipo_msg}");
		exit();
		} else {
			$sql_usario = "UPDATE usuario SET nome='{$nome}', email='{$email}', senha='{$nova_senha}' WHERE id= {$id};";
			$msg = "Usuário alterado com sucesso!";			
		}

	}

	if ($conexao->query($sql_usario)) {
		$tipo_msg = 'success';
	} else {
		$msg = "Error : Usuário não pode ser salvo";
		$tipo_msg = "danger";
	}

	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

/*
	if ($senha != $confirmasenha) {
		$msg = 'Senhas digitadas não conferem';
		$tipo_msg = 'warning';
		header("Location: salvar-usuario.php?msg={$msg}&tipo_msg={$tipo_msg}");
	} else {		

		if ($id != '') {
			$sql_usario = "UPDATE usuario SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id= {$id};";
			$msg = "Usuário alterado com sucesso!";
		} else {
			$sql_usario = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}');";
			$msg = "Usuário criado com sucesso!";
		}

		if ($conexao->query($sql_usario)) {
			$tipo_msg = 'success';
		} else {
			$msg = "Error : Usuário não pode ser salvo";
			$tipo_msg = "danger";
		}

		header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
	}
*/


 ?>