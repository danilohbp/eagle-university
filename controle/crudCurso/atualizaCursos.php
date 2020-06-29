<?php
include('../../../controle/conexaobd.php');

$curso_selecionado = isset($_POST['cursos']) ? $_POST['cursos'] : "";
$seleciona_curso = "SELECT * FROM curso WHERE nome LIKE '%$curso_selecionado%'";
$executa_filtro = mysqli_query($con, $seleciona_curso);
$linha = mysqli_fetch_assoc($executa_filtro);	
$site = $linha['site'];
$especialidade = $linha['especialidade'];
$site = $linha['site'];
$site = $linha['site'];
$site = $linha['site'];
$site = $linha['site'];
