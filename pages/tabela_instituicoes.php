<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Página de usuário">
  	<meta name="keywords" content="Avatar, usuário">
  	<meta name="author" content="DaniloHBP">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabela de cursos</title>
	<link rel="shortcut icon" href="http://localhost/eagleuniversity/img/eagle_favicon.png"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/styles.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/tabelas.css">
</head>
<body>
	<header>
		<?php
			include('../layout/navbar.php');
		?>
	</header>
	<main class="container">
		
		<section style="background-color:white;margin-top: 20px" width="400px">
			<center>
				<h1>Lista de Universidades!</h1>	
			</center>
			
			<table>
				<tr>
					<th>Universidade</th>
					<th>Curso</th>
					<th>Descrição</th>
				</tr>
				<tr>
					<td>Alfreds Futterkiste</td>
					<td>Maria Anders</td>
					<td>Germany</td>
				</tr>
				<tr>
					<td>Centro comercial Moctezuma</td>
					<td>Francisco Chang</td>
					<td>Mexico</td>
				</tr>
				<tr>
					<td>Ernst Handel</td>
					<td>Roland Mendel</td>
					<td>Austria</td>
				</tr>
				<tr>
					<td>Island Trading</td>
					<td>Helen Bennett</td>
					<td>UK</td>
				</tr>
				<tr>
					<td>Laughing Bacchus Winecellars</td>
					<td>Yoshi Tannamuri</td>
					<td>Canada</td>
				</tr>
				<tr>
					<td>Magazzini Alimentari Riuniti</td>
					<td>Giovanni Rovelli</td>
					<td>Italy</td>
				</tr>
			</table>
		</section>	
		<?php
			include ('../layout/footer.php');
		?>
	</main>

	<script type="text/javascript" src="https://localhost/eagleuniversity/js/api.js"></script>
</body>
</html>