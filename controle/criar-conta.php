<?php
	
include('conexaobd.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$pseudonimo = $_POST['pseudonimo'];
 
$sql = "INSERT INTO usuario (nome, senha, usuario) VALUES ('$nome', '$senha', '$pseudonimo')";
if (mysqli_query($con, $sql)) {
	sleep(20);
	header("location: http://localhost/eagleuniversity/index.php");
} 
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);


