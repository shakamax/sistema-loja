<?php 

	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$title = "Cadastro de funcionários";

	$sql_func = "SELECT * FROM funcionarios;";

	$funcionarios = $conexao->query($sql_func);


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
			<input type="text" name="nome" class="form-control" required>
			</div>
			<div class="col-6">
				<label for="data_nasc">Data Nascimento</label>
				<input type="text" name="data_nasc" class="form-control data"  size="14" maxlength="10" placeholder="Ex: 30/12/1991" required> 
			</div>
			<!-- onkeypress="mascara(this, mdata);" -->
			<div class="col-6">
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone" class="form-control telefone" placeholder="Ex : (61) 69999-9999" required>
			</div>

			<div class="col-6">
				<label for="cpf"> CPF</label>
				<input type="text" name="cpf" class="form-control CPF" placeholder="Ex 001.001.001-01" required>
			</div>
			<div class="col-6">
				<label for="matricula">Matrícula</label>
				<input type="text" name="matricula" class="form-control matri" placeholder="Ex: 9999.9999.999" required>
			</div>
			<div class="col-12">
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form-control" placeholder="seuemail@email.com" required>
			</div>
			<div class="col-3">
				<label for="sexo">Sexo</label>
				<select name="sexo" class="form-control">
					<option value="">Escolha uma opção</option>
					<option value="F">Femino</option>
					<option value="M">Masculino</option>
				</select>
			</div>
			<div class="col-6">
				<label for="cargo">Cargo</label>
				<select name="cargo" class="form-control">
					<option value="">Escolha uma opção</option>
					
				</select>
			</div>

		</div>
	</form>

</div>






 <?php 
 	include ('layout/footer.php');
  ?>