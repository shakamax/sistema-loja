<?php 
	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$title = 'Cadastro de cargo';

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_cargo = "SELECT * FROM cargo WHERE id={$id};";
		$cargos = $conexao->query($sql_cargo);

		$cargo = $cargos->fetch_assoc();
		$title = "Modificar Cargo";

	}

 ?>

<div class="container">
	<p>&nbsp;</p>

	<h1 align="center"> <?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item"><a href="cargo.php">Cargo</a></li>
				    <li class="breadcrumb-item active" aria-current="page" onclick="return confirm('Deseja realmente excluir o cargo ') "> <?php echo $title; ?></li>
			 	 </ol>
			</nav>
		</div>
	</div>

</div>

<div class="container">
	<form class="form-group" method="POST" action="cru-cargo.php">
		
		<div class="col-12">
			<label for="descricao">Cargo #<?php echo (isset($id) ? $cargo['id'] : '') ?></label>
			<input type="text" name="descricao" class="form-control" value="<?php echo(isset($id) ? $cargo['descricao'] : '' ) ?>" required>

			<input type="hidden" name="id" value="<?php echo (isset($id) ? $cargo['id'] : '') ?>">
			<p>&nbsp;</p>


			<button type="submit" class="btn btn-success float-right">Salvar</button>
		</div>


	</form>
</div>


 <?php 
	include ('layout/footer.php');
  ?>