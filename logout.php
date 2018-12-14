<?php include ('layout/session.php');

	session_destroy();
	header("Location: index.php?msg=Sessão Encerrada&tipo_msg=info");
 ?>