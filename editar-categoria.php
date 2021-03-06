<?php include ('layout/session.php');
	require ("layout/conexao.php");
	include ("layout/header.php");
	include ("layout/menu.php");

	$id = $_GET['id'];

	$select_categoria = "SELECT * FROM categoria WHERE id = '{$id}';";

	$dados = $conexao->query($select_categoria);
	$categoria = $dados->fetch_assoc();

	$sql_cat = "SELECT tipo FROM categoria GROUP BY tipo;";
	$dado_tipo = $conexao->query($sql_cat);

 ?>
<div class="container-fluid">
	<p>&nbsp;</p>

	<h1 align="center">Editar Categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item"><a href="categoria.php">Categorias</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Modificar Categorias</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<form method="POST" action="update-categoria.php">
				<div class="form-group">
					<label for="descricao">Nome Categoria - ID <?php echo $id; ?></label>
					
					<input type="text" name="descricao" id="descricao" class="form-control" value="<?php echo $categoria['descricao']; ?>" required>

					<label for="tipo">Tipo</label>
					<SELECT name="tipo" class="form-control">

						<option value="<?php echo($categoria['tipo']); ?>"> Escolha o tipo </option>

						<?php while ($tipo = $dado_tipo->fetch_array(MYSQLI_ASSOC)) { ?>

							<option value="<?php echo($tipo['tipo']); ?>"
								

								<?php if ($tipo['tipo'] == $categoria['tipo']) {
									echo 'selected="selected"';
								} ?>

								>
								<?php echo $tipo['tipo']; ?>
							</option>

						<?php } ?>

					</SELECT>

					<input type="hidden" name="id" value="<?php echo $id ?>">
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