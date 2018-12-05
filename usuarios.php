<?php 
	require ("layout/conexao.php");
	include ("layout/header.php");
	include ("layout/menu.php");

	$sql_usuarios = "SELECT * FROM usuario;";

	$usuarios = $conexao->query($sql_usuarios);
 ?>

<div class="container">
	<div class="row">
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>E-mail</th>
			</tr>

			<?php while ($usuario = $usuarios->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $usuario["id"]; ?></td>
					<td><?php echo $usuario["nome"]; ?></td>
					<td><?php echo $usuario["email"]; ?></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>


 <?php include ("layout/footer.php"); ?>