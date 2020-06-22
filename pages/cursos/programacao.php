<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Página de usuário">
  	<meta name="keywords" content="Avatar, usuário">
  	<meta name="author" content="DaniloHBP">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eagle University</title>
	<link rel="shortcut icon" href="http://localhost/eagleuniversity/img/eagle_favicon.png"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/styles.css">
</head>
<body>
	<?php
		include('../../layout/navbar.php');
	?>
	<main class="container">
		<header class="titulos-cursos">
			<h1>Linguagens de Programação</h1>
			<h6>Acessado no dia <?php 
				$t=time();
				echo(date("d/m/Y",$t));
			?></h6>
		</header>
		<hr>
		<div class="card-deck">
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/ruby01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Ruby</h5>
					<h6>Aprenda Ruby com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/python01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Python</h5>
					<h6>Aprenda Python com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/javascript01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">JavaScript</h5>
					<h6>Aprenda JavaScript com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/php01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">PHP</h5>
					<h6>Aprenda PHP com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
		</div>
		<div>
		<div class="card-deck">
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/ruby01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Ruby</h5>
					<h6>Aprenda Ruby com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/python01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Python</h5>
					<h6>Aprenda Python com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/javascript01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">JavaScript</h5>
					<h6>Aprenda JavaScript com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="https://localhost/eagleuniversity/img/programacao/php01_200.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">PHP</h5>
					<h6>Aprenda PHP com os melhores cursos encontrados na web.</h6>
				</div>
				<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div>
			</div>
		</div>
		<div>

		<div>
			<center>
				<h1>Alguns exemplos de scripts</h1>
			</center>
			<dir>
				
			</dir>
		</div>

	
	</main>

	<?php
		include ('../../layout/footer.php');
	?>
	<script type="text/javascript" src="https://localhost/eagleuniversity/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://localhost/eagleuniversity/js/bootstrap.min.js"></script>
</body>
</html>