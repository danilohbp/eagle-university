<?php 

session_start();

$login = $_POST['pseudonimo'];
$senha = $_POST['senha'];

require('./conexaobd.php');

$resultado_usuarios_comuns = mysqli_query($con, "SELECT * FROM usuario 
WHERE pseudonimo = '$login' AND senha = '$senha'");
$resultado_administradores = mysqli_query($con, "SELECT * FROM administradores 
WHERE nome = '$login' AND senha = '$senha'");

if(mysqli_num_rows ($resultado_usuarios_comuns) > 0)
{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['javiupopup'] = false;
	$avatar = mysqli_query($con, "SELECT imagem FROM usuario where $login and $senha");
	header('location: https://localhost/eagleuniversity/index.php');	
}

else{
	if (mysqli_num_rows ($resultado_administradores) > 0) {
		header('location: http://localhost/eagleuniversity/pages/admin/areadoadmin.php');
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
	}
	else{
		unset ($_SESSION['login']);
	  	unset ($_SESSION['senha']);
	    $_SESSION['errologin']	= "Usuário ou senha inválido!";
	    header('location: https://localhost/eagleuniversity/pages/login.php');
	}
	
  }
?>