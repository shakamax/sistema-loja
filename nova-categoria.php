<?php include ('layout/session.php');
	require ("layout/conexao.php");
	include ("layout/header.php");
	include ("layout/menu.php");

	$sql_categoria = "SELECT tipo FROM categoria group by tipo";

	$categoria = $conexao->query($sql_categoria);

 ?>
<div class="container-fluid">
	<p>&nbsp;</p>

	<h1 align="center">Cadastrar Categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item"><a href="categoria.php">Categorias</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Cadastrar Categorias</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<form method="POST" action="inserir-categoria.php">
				<div class="form-group">
					<label for="descricao">Nome Categoria</label>
					<input type="text" name="descricao" id="descricao" class="form-control" required>

					<label for="Tipo">Tipo</label>

					<select name="tipo" class="form-control">
					<option value="">Escolha o tipo</option>
						<?php while ($tipo = $categoria->fetch_array(MYSQLI_ASSOC)) { ?>

							<option value="<?php echo($tipo['tipo']); ?>"> <?php echo $tipo['tipo']; ?> </option>

						<?php } ?>
					</select>
				</div>
				<div class="row">
					<div class="col-11"></div>
					<div class="col-1">
						<button class="btn btn-success" type="submit">Salvar</button>
					</div>
				</div>			
			</form>
		</div>
	</div>
</div>
<?php include("layout/footer.php"); ?>