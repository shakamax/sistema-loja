<?php 

	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$title = "Cadastro de funcionários";

	$sql_func = "SELECT * FROM funcionarios;";

	$funcionarios = $conexao->query($sql_func);

	$sql_left = "SELECT * FROM cargo;";
	$sql_cargo = $conexao->query($sql_left);


	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_id = "SELECT * FROM funcionarios WHERE id={$id}";
		$dado = $conexao->query($sql_id)->fetch_assoc();
		//O FETCH_ASSOC PRECISA SER ARMAZENADO EM UMA VARIÁVEL
		$title = "Editar Funcionário";

	}


 ?>
	
<div class="container">
	<h1 align="center"><?php echo $title ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item"><a href="funcionarios.php">Funcionários</a></li>
				    <li class="breadcrumb-item active" aria-current="page"> <?php echo $title ?></li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>


<div class="container">
	<form class="form-group" method="POST" action="cru-func.php">
		<div class="row">
			<div class="col-12">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" value="<?php echo (isset($dado) ? $dado['nome'] : '') ?>" required>
			</div>
			<div class="col-6">
				<label for="data_nasc">Data Nascimento</label>
				<input type="date" name="data_nasc" class="form-control"  size="14" maxlength="10" placeholder="Ex: 30/12/1991" value="<?php echo (isset($dado) ? $dado['dt_nascimento'] : '') ?>" required> 
			</div>
			<!-- onkeypress="mascara(this, mdata);" -->
			<div class="col-6">
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone" class="form-control telefone" value="<?php echo (isset($dado) ? $dado['telefone'] : '') ?>" placeholder="Ex : (61) 69999-9999">
			</div>

			<div class="col-6">
				<label for="cpf"> CPF</label>
				<input type="text" name="cpf" class="form-control CPF" placeholder="Ex 001.001.001-01" value="<?php echo (isset($dado) ? $dado['cpf'] : '' ) ?>" required>
			</div>
			<div class="col-6">
				<label for="matricula">Matrícula</label>
				<input type="text" name="matricula" class="form-control matri" placeholder="Ex: 9999.9999.999" value="<?php echo (isset($dado) ? $dado['cpf'] : '') ?>">
			</div>
			<div class="col-12">
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form-control" placeholder="seuemail@email.com" required>
			</div>
			<div class="col-3">
				<label for="sexo">Sexo</label>
				<select name="sexo" class="form-control" required>
					<option value="">Escolha uma opção</option>
					<option value="F">Femino</option>
					<option value="M">Masculino</option>
				</select>
			</div>
			<div class="col-6">
				<label for="cargo">Cargo</label>
				<select name="cargo" class="form-control" required>
					<option value="">Escolha uma opção</option>
					<?php while ($cargo = $sql_cargo->fetch_array(MYSQLI_ASSOC)) { ?>
						<option value="<?php echo $cargo['id']; ?>"> <?php echo $cargo['descricao']; ?></option>

					<?php } ?>
				</select>
			</div>
			<div class="col-3"> 
				<label for="dt_adm">Data de admissão</label>
				<input type="date" name="dt_adm" class="form-control" placeholder="Ex : DD/MM/AAAA" required>
			</div>

			<input type="hidden" name="id" value="<?php echo (isset($id) ? $id : '') ?>">

		</div>
		<div class="col">
			<p>&nbsp;</p>
			<button type="submit" class="btn btn-success float-right">Salvar Funcionário</button>
		</div>
	</form>

</div>






 <?php 
 	include ('layout/footer.php');
  ?>