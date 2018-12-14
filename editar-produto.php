 <?php include ('layout/session.php');
	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$id = $_GET['id'];

	$sql_produtos = "SELECT produto.*, categoria.descricao FROM 				produto
						LEFT JOIN categoria ON produto.id_categoria = categoria.id
						WHERE produto.id = {$id}";

	$dados = $conexao->query($sql_produtos);
	$produto = $dados->fetch_array(MYSQLI_ASSOC);

	$sql_categoria = "SELECT * FROM CATEGORIA;";

	$mercadorias = $conexao->query($sql_categoria);

 ?>


 <div class="container">
	<p>&nbsp;</p>
	<h1>Cadastro de Produtos</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Editar produto</li>
			  </ol>
			</nav>
		</div>
	</div>
 </div>

 <div class="container">
	<form class="form-group" method="POST" action="update-produto.php">
 	 <div class="row">
	 	<div class="col-12">	
	 			<label for="descricao">Nome</label>
	 			<input class="form-control" type="text" name="descricao" id="descricao" placeholder="Nome do produto" value="<?php echo $produto['nome']; ?>" required>
	 	</div>

	 	<div class="col-6">
	 		<label for="valor">Preço (R$)</label>
	 		<input class="form-control price" type="text" name="valor" id="valor" placeholder="Preço do produto!" value="<?php echo $produto['valor']; ?>">
	 	</div>
	 	<div class="col-6">
	 		<label for="estoque"> Quantidade </label>
	 		<input type="number" name="estoque" class="form-control" placeholder="Quantidade Ex: 5" value="<?php echo $produto['estoque']; ?>">
	 	</div>

	 	
	 	<div class="col-6">

	 		<label for="id_categoria"> Categoria</label>

	 		<select name="id_categoria" class="form-control">
	 			<option value="<?php echo $produto['id_categoria']; ?>"> <?php echo $produto['descricao']; ?> </option>
	 			<?php while ($mercadoria = $mercadorias->fetch_array(MYSQLI_ASSOC)) { ?>

	 			<option value="<?php echo $mercadoria['id']; ?>"> <?php echo $mercadoria['descricao']; ?> </option>

	 			<?php } ?>

	 		<input type="hidden" name="id" value="<?php echo $produto['id'] ?>">

	 		</select>


	 	</div>
 	 </div>

 	 <p>&nbsp; </p>

 	 <div class="col-12">

 	 <button type="submit" class="btn  btn-info	 float-right">Salvar alterações </button>

 	 </div>

	</form>
 </div>


  <?php 
 include ('layout/footer.php'); ?>