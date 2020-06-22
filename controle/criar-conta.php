<?php declare(strict_types=1);//Serve para restringir as variáveis aos seus respectivos tipos
	
include('conexaobd.php');

/*$servername = "localhost";
$database = "eagleuniversity";
$username = "root";
$password = "";*/

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$pseudonimo = $_POST['pseudonimo'];

/*$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}*/
 
$sql = "INSERT INTO usuario (nome, senha, pseudonimo) VALUES ('$nome', '$senha', '$pseudonimo')";
if (mysqli_query($con, $sql)) {
	header("location: https://localhost/eagleuniversity/index.php");
} 
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);


