<?php 
	require ('layout/conexao.php');

	$nome = $_POST['nome'];
	$dt_nasc = $_POST['data_nasc'];
	$tel = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	
	if (isset($_POST['matricula']) && $_POST['matricula'] != '') {
	
		$matri = $_POST['matricula'];
	} else {
		$matri = '';
	}
	
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$id_cargo = $_POST['cargo'];
	$dt_adm = $_POST['dt_adm'];
	$id = $_POST['id'];

	if (isset($id) && $id != '') {
		$sql_cru = "Sua mamãe";
	} else {
	$sql_cru = "INSERT INTO funcionarios (nome, id_cargo, cpf, matricula, dt_nascimento, telefone, email, sexo, dt_admissao) VALUES ('{$nome}', {$id_cargo}, '{$cpf}', '{$matri}', '{$dt_nasc}', '{$tel}', '{$email}', '{$sexo}', '{$dt_adm}');";
	$msg = "Funcionário criado com sucesso!";
	}

	echo $sql_cru;

	if ($conexao->query($sql_cru)) {
		$tipo_msg = "success";
	} else {
		$msg = "Error: não foi possível salvar usuário";
		$tipo_msg = "danger";
	}


	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}")
	

 ?>