<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Danilo Henrique Barbosa Pires">
	<meta name="keywords" content="php, aula, banco">
	<meta name="description" content="Aula de LaboratÃ³rio de Banco de Dados">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Minha pÃ¡gina PHP</title>
</head>
<body>
	<form name = "formulario" method="get" action="#">
		Nome: <input type="text" name="nome" required=""><br>
		E-mail: <input type="email" name="email"><br>
		Endereco: <input type="text" name="endereco">
		Estado: <input type="text" name="estado"><br>
		<input type="submit" name="botao" value="Enviar">
	</form>

	<?php
		$nome = isset($_GET['nome']);
		$email = isset($_GET['email']);
		$endereco = isset($_GET['endereco']);
		$estado = isset($_GET['estado']);

		if (!empty($nome) && !empty($email) && !empty($email) && !empty($estado)){
			
			echo "<h2>Nome: $nome</h2>";
			echo "<h2>Endereco: $endereco</h2>"; 
			echo "<h2>Email: $email</h2>"; 
			echo "<h2>Estado: $estado</h2>";
		}

		else{
			echo "<h2>Nome: ?</h2>";
			echo "<h2>Endereco: ?</h2>"; 
			echo "<h2>Email: ?</h2>"; 
			echo "<h2>Estado: ?</h2>";	
		}

		$con=mysqli_connect('localhost', 'root', null, 'aulaLBD');
		echo "<h1>Mensagem: ".mysqli_get_host_info($con)."</h1>";
		$query = "insert into cliente (nome, endereco, email, estado) values('$nome', '$endereco','$email', 'estado');";

		mysqli_query($con, $query);



		$sql = mysqli_query($con, "select * from cliente");



		while ($row = mysqli_fetch_assoc($sql)){

			echo "ID: ".$row["id"]."<br>";

			echo "Nome: ".$row["nome"]."<br>";

			echo "Endereço: ".$row["endereco"]."<br>";

			echo "E-mail: ".$row["email"]."<br>";

			echo "Estado: ".$row["email"]."<br>";

		}




	?>
</body>
</html>