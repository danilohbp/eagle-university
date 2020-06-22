<?php
	
	session_start();

	require('../../controle/conexaobd.php');



	if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
		$resultado_administradores = mysqli_query($con, "SELECT * FROM administradores 
		WHERE nome = '".$_SESSION['login']."' AND senha = '".$_SESSION['senha']."'");
		
		if (mysqli_num_rows ($resultado_administradores) > 0){
			include('dom.php');		
		}
		else{
			header('Location: https://localhost/eagleuniversity/pages/login.php');
		}
	}
	else
	{
			header('Location: https://localhost/eagleuniversity/pages/login.php');
	}
	

?>