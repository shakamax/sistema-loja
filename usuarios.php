<?php 
	require ("layout/conexao.php");
	include ("layout/header.php");
	include ("layout/menu.php");

	$sql_usuarios = "SELECT * FROM usuario;";

	$usuarios = $conexao->query($sql_usuarios);
 ?>

<div class="container">

	<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])) { ?>
	
		<div class="alert alert-<?php echo $_GET['tipo_msg'] ?> esconde" align="center"> <?php echo $_GET['msg'] ?> </div>

	<?php } ?>
	<p>&nbsp;</p>

	<h1 align="center">Categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			</tr>

			<?php while ($usuario = $usuarios->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $usuario["id"]; ?></td>
					<td><?php echo $usuario["nome"]; ?></td>
					<td><?php echo $usuario["email"]; ?></td>
					<td align="right">
						<a href="salvar-usuario.php?id=<?php echo($usuario['id']) ?>" class="btn btn-info"> <i class="fas fa-edit"> </i> </a>
						<a href="deleta-usuario.php?id=<?php echo($usuario['id']) ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o usuário <?php echo($usuario['nome']); ?>')"> <i class="fas fa-trash"> </i> </a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>


 <?php include ("layout/footer.php"); ?>