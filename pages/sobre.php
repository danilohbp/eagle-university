
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Página de usuário">
  	<meta name="keywords" content="Avatar, usuário">
  	<meta name="author" content="DaniloHBP">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sobre</title>
	<?php 
	include('../controle/links.php');
	?>
</head>
<body id="autores">
	<?php
		include('../layout/navbar.php');
	?>

	<main class="container">
		<h1>Eagle University</h1>
		<p>
			Eagle University é um projeto de plataforma que intermedeia aos usuários cursos online "dispersos" na internet, facilitando aos usuários apenas digitarem o curso desejado. Mesmo sistemas de buscas eficientes podem trazer aos usuários um desconforto ou imprecisão nos resultados desejados. O Eagle University foi desenvolvido com foco em especialização do seus utilizadores, não mensurando esforços para a realização desse feito. 
		</p>
		<p>
			Concluímos que em um mundo globalizado faz-se necessário o fomento da disponibilização da informação e da capacitação de novos profissionais. Dentre os tipos de cursos a serem filtrados pelo nosso sistema de filtro nos limitamos aos seguintes temas: Programação e Hardware.  
		</p>

		<h1>Criadores</h1>

		<div class="card-group">
			<div class="card">
				<a href="https://localhost/eagleuniversity/index.php">
					<img src="https://localhost/eagleuniversity/img/sobre_nos/adaucto.png" class="card-img-top" alt="..." width="100%">
				</a>
				<div style="position: absolute;">
					<h1 style="text-align: center;">Adaucto</h1>		
				</div>
				
				
			</div>
			<div class="card">
				<a href="https://localhost/eagleuniversity/index.php">
					<img src="https://localhost/eagleuniversity/img/sobre_nos/danilohbp.png" class="card-img-top" alt="...">	
				</a>
				<div style="position: absolute;">
					<h1 style="text-align: center;">Danilo</h1>		
				</div>
			</div>
			<div class="card">
				<a href="https://localhost/eagleuniversity/index.php">
					<img src="https://localhost/eagleuniversity/img/sobre_nos/rodrigo.png" class="card-img-top" alt="...">	
				</a>
				<div style="position: absolute;">
					<h1 style="text-align: center;">Rodrigo</h1>		
				</div>
			</div>
		</div>
	</main>
	<?php
		include ('../layout/footer.php');
		include ('../controle/scripts.php');		
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