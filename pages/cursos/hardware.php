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
				<img src="http://localhost/eagleuniversity/img/hardware/hardware1.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Fundamentos de Hardware</h5>
					<h6>Aprenda hardware e monte seu pc.</h6>
				</div>

				<div class="card-footer">
					<a href="https://www.learncafe.com/cursos/fundamentos-de-hardware" target="_blank">Veja o curso</a>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="http://localhost/eagleuniversity/img/hardware/hardware2.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Montagem e Manutenção de Micro computadores Completa</h5>
					<h6>Aprimore suas habilidades com montagem e manutenção de Micro Computadores.</h6>
				</div>
				<div class="card-footer">
					<a href="https://www.learncafe.com/cursos/montagem-e-manutencao-de-micro-computadores-completa" target="_blank">Veja o curso</a>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="http://localhost/eagleuniversity/img/hardware/hardware3.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Curso de Hardware Completo</h5>
					<h6>Aprenda hardware e torne-se um profissional.</h6>
				</div>
				<div class="card-footer">
					
					<a href="https://www.learncafe.com/cursos/curso-de-hardware-completo--(manutencao-de-pcs)-gratis" target="_blank">Veja o curso</a>
				</div>
			</div>
			<div class="card" style="max-width: 250px;">
				<img src="http://localhost/eagleuniversity/img/hardware/hardware4.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Curso de Hardware</h5>
					<h6>Aprenda hardware com um dos melhores cursos da web.</h6>
				</div>
				<div class="card-footer">
					
					<a href="https://www.learncafe.com/cursos/curso-de-hardware-2" target="_blank">Veja o curso</a>
				</div>
			</div>
		</div>
		<div>
		<div class="card-deck">
			<div class="card" style="max-width: 250px;">
				<img src="http://localhost/eagleuniversity/img/hardware/hardware5.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Questões Técnicas de Computador</h5>
					<h6>Avalie o seu computador o funcionamento do seu computador e aprenda a ajustá-lo. Aprenda isto com este curso!</h6>
				</div>
				<div class="card-footer">
					<a href="https://www.learncafe.com/cursos/questoes-tecnicas-de-computador" target="_blank">Veja o curso</a>
				</div>
			</div>
		</div>
	</main>

	<?php
		include ('../../layout/footer.php');
	?>
	<script type="text/javascript" src="https://localhost/eagleuniversity/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://localhost/eagleuniversity/js/bootstrap.min.js"></script>
</body>
</html>