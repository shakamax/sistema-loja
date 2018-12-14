<?php session_start();
	if (!isset($_SESSION['nome'])) {
		header("location: index.php?msg=Sessão Expirada&tipo_msg=warning");
	}
 ?>