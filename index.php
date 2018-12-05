<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="contaner">
	<p>&nbsp;</p>
<!-- 	<p>&nbsp;</p> -->
	<div class="row">
		<div class="col"></div>
		<div class="col">

			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<div class="text-center">
						<img src="img/login.png" width="130px" class="img-fluid">
					</div>
					<h3 class="text-center">Área restrita</h3>

					<?php if(isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>
						<div class="alert alert-danger">
							<p class="text-center">A senha digita está incorreta</p>
							<!-- <a href="javascript:history.back(-1)" class="btn btn-info">Tentar novamente</a> -->
						</div>
					<?php } ?>

					<form method="post" action="principal.php">
						<div class="form-group">
							<label>Login:</label>
							<input type="text" name="login" class="form-control" placeholder="Digite seu usuário" >
						</div>
						<div class="form-group">
							<label>Senha:</label>
							<input type="password" name="senha" class="form-control" placeholder="Digite sua senha" >
						</div>
						<button type="submit" class="btn btn-primary float-right">Logar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>