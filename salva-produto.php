<?php 
	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$sql_categorias = "SELECT * FROM categoria";

	$categorias = $conexao->query($sql_categorias);

	$title = "Novo produto";

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_produto = "SELECT * FROM produto WHERE id = {$id};";
		$produto = $conexao->query($sql_produto);
		$dados_produtos = $produto->FETCH_ASSOC();
		$title = "Cadastro de produto";
	}

 ?>


 <div class="container">
	<p>&nbsp;</p>
	<h1> <?php echo ($title); ?> </h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item active" aria-current="page"> <?php echo $title; ?> </li>
			  </ol>
			</nav>
		</div>
	</div>
 </div>

 <div class="container">
	<form class="form-group" method="POST" action="inserir-produto.php">
 	 <div class="row">
	 	<div class="col-12">	
	 			<label for="descricao">Nome</label>
	 			<input class="form-control" type="text" name="descricao" id="descricao" placeholder="Nome do produto" value="<?php echo(isset($dados_produtos) ? $dados_produtos['nome'] : '') ?>" required>
	 	</div>

	 	<div class="col-6">
	 		<label for="valor">Preço (R$)</label>
	 		<input class="form-control price" type="text" name="valor" id="valor" value="<?php echo(isset($dados_produtos) ? $dados_produtos['valor'] : '') ?>" placeholder="Preço do produto!">
	 	</div>
	 	<div class="col-6">
	 		<label for="estoque"> Quantidade </label>
	 		<input type="number" name="estoque" class="form-control" value="<?php echo($dados_produtos) ? $dados_produtos['estoque'] : '' ?>" placeholder="Quantidade Ex: 5">
	 	</div>

	 	
	 	<div class="col-6">

	 		<label for="id_categoria"> Categoria</label>

	 		<select name="id_categoria" class="form-control">
	 			<option value="<?php echo($mercadoria['id']) ?>">Escolha uma categoria</option>
	 			<?php while ($mercadoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>

	 			<option value="<?php echo $mercadoria['id']; ?>"

	 				<?php 
	 					if (isset($dados_produtos) && $dados_produtos['id_categoria'] == $mercadoria['id']) {
	 						echo 'selected="selected"';
	 					}
	 				 ?>

	 				>

	 				 <?php echo $mercadoria['descricao']; ?> </option>

	 			<?php } ?>
	 		</select>

	 		<input type="hidden" value="<?php echo(isset($dados_produtos) ? $dados_produtos['id'] : '') ?>" name="id">
	 	</div>
 	 </div>
 	 <p>&nbsp;</p>
 	 <div class="col-12">
 	 <button type="submit" class="btn  btn-success float-right">Salvar</button>
 	 </div>
	</form>
 </div>




 <?php 
 include ('layout/footer.php'); ?>