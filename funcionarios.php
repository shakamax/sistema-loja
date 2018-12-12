<?php 

	require ('layout/conexao.php');
	include ('layout/header.php');
	include ('layout/menu.php');

	$sql_func = "SELECT * FROM funcionarios;";

	$funcionarios = $conexao->query($sql_func);


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
				    <li class="breadcrumb-item active" aria-current="page">Funcionários</li>
			 	 </ol>
			</nav>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="col-12">
	<a href="funcionario-mod.php" class="btn btn-success float-right">Cadastrar Funcionário</a>
	</div>
	<p>&nbsp;</p>


	<table class="table table-bordered table-striped table-hovered">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Cargo</th>
			<th>cpf</th>
			<th>Matrícula</th>
			<th>Data de nascimento</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Sexo</th>
			<th>Data de admissão</th>
			<th>Ações</th>
		</tr>
			

		<?php while ($funcionario = $funcionarios->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		
		<?php } ?>
	
	</table>

</div>







	<?php 
	include ('layout/footer.php');

	 ?>