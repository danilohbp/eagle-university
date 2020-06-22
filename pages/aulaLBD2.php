<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Danilo Henrique Barbosa Pires">
	<meta name="keywords" content="php, aula, banco">
	<meta name="description" content="Aula de Laboratório de Banco de Dados">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Minha página PHP</title>
</head>
<body>
	<form name = "formulario" method="get" action="#">
		Nome: <input type="text" name="nome" required=""><br>
		E-mail: <input type="email" name="email"><br>
		Estado: <input type="text" name="estado"><br>
		<input type="submit" name="botao" value="Enviar">
	</form>

	<?php
		$nome = $_GET['nome'];
		$email = $_GET['email'];
		$estado = $_GET['estado'];
		if (!empty($nome) && !empty($email) && !empty($estado)){
			
			echo "<h2>Nome: $nome</h2>";
			echo "<h2>Email: $email</h2>"; 
			echo "<h2>Estado: $estado</h2>";
		}

		else{
			echo "<h2>Nome: ?</h2>";
			echo "<h2>Email: ?</h2>"; 
			echo "<h2>Estado: ?</h2>";	
		}

		$con=mysqli_connect('localhost', 'root', null, 'aulaLBD');
		echo "<h1>Mensagem: ".mysqli_get_host_info($con)."</h1>";
	?>
</body>
</html>