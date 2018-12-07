<?php 
	require ('layout/conexao.php');

	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$senha  = $_POST['senha'];
	$confirmasenha = $_POST['confirmasenha'];
	$id = $_POST['id'];

	$senha = md5($senha);



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



 ?>