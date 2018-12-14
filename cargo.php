<?php include ('layout/session.php');
	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$sql_cargo = "SELECT * FROM cargo;";
	$cargos = $conexao->query($sql_cargo);


 ?>

<div class="container">
	<p>&nbsp;</p>
	
	<div class="row">
		<div class="col-12">

			<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])) { ?>
			
				<div class="alert alert-<?php echo $_GET['tipo_msg'] ?> esconde" align="center"> <?php echo $_GET['msg'] ?> </div>

			<?php } ?>
		</div>
	</div>
	
	<p>&nbsp;</p>

	<h1 align="center">Funcionários</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
		  		 <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Cargos</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>


<div class="container">
	<div class="col">
	<a href="cargo-mod.php" class="btn btn-success float-right">Novo cargo</a>
	</div>
	<table class="table table-bordered table-striped table-hover">
		<tr align="center">
			<th>#</th>
			<th>Cargo</th>
			<th>Ações</th>
		</tr>

		<?php while ($cargo = $cargos->fetch_array(MYSQLI_ASSOC)) { ?>

			<tr>
				<td align="center"><?php echo $cargo['id']; ?></td>
				<td><?php echo $cargo['descricao']; ?></td>
				<td align="center">
					<a href="cargo-mod.php?id=<?php echo $cargo['id']; ?>" class="btn btn-info">
						<i class="fas fa-edit"></i>
					</a>
					<a href="#" class="btn btn-danger">
						<i class="fas fa-trash"> </i>
					</a>
				</td>
			</tr>

		<?php } ?>

	</table>



</div>



 <?php 
 	include ('layout/footer.php');
  ?>