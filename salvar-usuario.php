<?php 
	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$title = "Cadastro de usuário";

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql_usuario = "SELECT * FROM usuario WHERE id={$id}";
		$usuario = $conexao->query($sql_usuario);
		$dado_usario = $usuario->FETCH_ASSOC();
		$title = "Edição de usuário";
	}

 ?>
<div class="container-fluid">
	<p>&nbsp;</p>

	<h1 align="center"><?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>
				    <li class="breadcrumb-item active" aria-current="page"> <?php echo $title; ?></li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	
	<form class="form-group" method="POST" action="cru-usario.php">

		<div class="col-12">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" value="<?php echo(isset($dado_usario) ? $dado_usario['nome'] : ""); ?>" required>
		</div>

		<!-- SENHA -->
		<div class="col-6">
			<label for="senha"> <?php echo (isset($dado_usario) ? "Deseja mudar a senha?" : "Senha"); ?> </label>
			<input type="password" name="senha" class="form-control" <?php echo (isset($dado_usario) ? '' : "required"); ?>>
		</div>

		<!-- EMAIL -->

		<div class="col-6 float-right">
			<label for="email">E-mail</label>
			<input type="email" name="email" class="form-control" value="<?php echo(isset($dado_usario) ? $dado_usario['email'] : ""); ?>" required>
		</div>
		
		<!-- CONFIRMA SENHA -->
		<div class="col-6">
			<label for="confirmasenha"> Confirme a senha </label>
			
			<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])) { ?>
				
			<div class="alert alert-<?php echo $_GET['tipo_msg'] ?> esconde" align="center"> <?php echo $_GET['msg'] ?> </div>

			<?php } ?>

			<input type="password" name="confirmasenha" class="form-control" <?php echo (isset($dado_usario) ? '' : "required"); ?>>


		</div>


		<input type="hidden" name="id" value="<?php echo(isset($dado_usario) ? $dado_usario['id'] : '') ?>">

		<p>&nbsp;</p>
		<div class="col">

			<button type="submit" class="btn btn-success float-right"> Salvar</button>
		</div>
	</form>


</div>




 <?php 
	include ('layout/footer.php');
 	
  ?>