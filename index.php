<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Página de usuário">
  	<meta name="keywords" content="Avatar, usuário">
  	<meta name="author" content="DaniloHBP">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eagle University</title>
	<?php 
	include('controle/links.php');
	?>
</head>

<body>
	<?php
		include('layout/navbar.php');
	?>
	
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active eagle-content">
				<img src="http://localhost/eagleuniversity/img/carrousel/android_group.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block carousel-text">
					<h1>Cursos à distância e de qualidade</h1>
					<h2>Aprenda Android</h2>	
				</div>
			</div>
			<div class="carousel-item eagle-content">
				<img src="http://localhost/eagleuniversity/img/carrousel/physics.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block carousel-text">
					<h1>Conheça as melhores plataformas de Ensino</h1>
					<h2>Entenda sobre Arquiteturas de Software</h2>
				</div>
			</div>
			<div class="carousel-item eagle-content">
				<img src="http://localhost/eagleuniversity/img/carrousel/math_wallpaper.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block carousel-text">
					<h1>Fique atualizado com os melhores cursos</h1>
					<h2>Aprenda Matemática para a Computação</h2>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<main class="container">
		<div id="filtro-desc">
			<h1>Filtre Cursos de Tecnologia e Matemática</h1>	
		</div>
		
		<form class="filtrador">
			<input type="text" autofocus="#" name="pesquisa" id="pesquisa" class="form-control" placeholder="Digite a sua pesquisa" style="max-width: 600px; min-width: 300px;" alt="Digite um curso de preferência para que seja filtrado">
			<div class="btn-group">
				<button type="button" class="btn btn-primary" id = "ativar-filtro" onclick="filtragem()">FILTROS</button>
				<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
					<a class="dropdown-item" href="#">Especialidade</a>
					<a class="dropdown-item" href="#">Duração</a>
					<a class="dropdown-item" href="#">Disponibilidade</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Filtro Misto</a>
				</div>
			</div>
		</form>
		
		<div class="listagem-cursos"></div>	
	
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Seja Bem Vindo(a)!</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>One fine body&hellip;</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	

	<?php
		include ('layout/footer.php');
		include ('controle/scripts.php');

		
	?>	
	<?php
		if (isset($_SESSION['login'])) {	
			if ($_SESSION['javiupopup'] == false) {
				echo "<script type='text/javascript'>
					$('#myModal').modal('show');
				</script>";
				$_SESSION['javiupopup'] = true;
			}
		}
	?>
</body>
</html>