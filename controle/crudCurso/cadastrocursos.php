<?php
include('../conexaobd.php');

/* CAMPOS DOS DADOS DO CURSO */
$nome_curso = $_POST['nome'];
var_dump($nome_curso);
$site = $_POST['site'];
$especialidade = $_POST['especialidade'];
$duracao = $_POST['duracao'];
$descricao = $_POST['descricao'];
$formatando_data = str_replace("/", "-", $_POST["data"]);
$data = date('Y-m-d', strtotime($formatando_data));
$situacao = $_POST['situacao'];

/* IMAGEM DO CURSO */
$name = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];


$sql = "INSERT INTO curso (nome, site, especialidade, duracao, descricao, data, situacao, imagem) VALUES ('$nome_curso', '$site', '$especialidade', '$duracao', '$descricao', '$data', '$situacao', '{$name}')";
if (mysqli_query($con, $sql)) {
	echo "Deu certo!";
} 
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
move_uploaded_file($temp, "../../img/cursos/programacao/".$name);