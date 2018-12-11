<?php 
	require ("layout/conexao.php");
	include ("layout/header.php");
	include ("layout/menu.php");

	$sql_categoria = "SELECT * FROM categoria;";

	$categorias = $conexao->query($sql_categoria);
?>
<div class="container">
	<p>&nbsp;</p>

	<h1 align="center">Categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>
<div class="row">
	<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
		<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
			<p align="center"><?php echo $_GET['msg']; ?> </p>
		</div>
	<?php } ?>
	
</div>
<div class="row">
	<div class="col-9"> <p>&nbsp;</p></div>
		<div class="col-3">
			<a href="nova-categoria.php" class="btn btn-success"> Cadastrar Categoria</a>
		</div>
</div>

<div class="container">
	<div class="row">
		
		<?php while ($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { //aqui começa o loop?>

			<div class="col-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/estoque.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
				    <h5 class="card-title">
				    	<?php echo $categoria['descricao']; ?></h5>
				    	<p>Tipo :
				    	<?php echo $categoria['tipo']; ?>
				    	</p>
				    <p class="card-text">
				    	<a href="editar-categoria.php?id=<?php echo($categoria['id']) ?>" class="btn btn-info" title="Update">
				    		<i class="fas fa-edit"></i>
				    	</a>

				    	<a href="delete-categoria.php?id=<?php echo $categoria['id']; ?>" title="Delete" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar a categoria <?php echo($categoria['descricao']) ?> ?')" >
				    		<i class="fas fa-trash-alt"></i>
				    	</a>
				    </p>
				    <a href="#" class="btn btn-success">Ver categoria</a>
				  </div>
				</div>
			</div>

		<?php } ?>
	</div>

</div>



<?php include ("layout/footer.php") ?>