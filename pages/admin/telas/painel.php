<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<link rel='stylesheet' type='text/css' href='http://localhost/eagleuniversity/css/admin.css'>
	<?php 
	include('../../controle/links.php');
	?>
</head>
<body>

<div class="sidenav">
  <?php include('../sidenav/sidenav.php');?>
</div>

<div class="main">
	<div>
		<h1>Usuários: 
			<?php 
				include('../../../controle/conexaobd.php');
				$usuarios = "SELECT * FROM usuario;";
				$executa = mysqli_query($con, $usuarios);
				while($linha = mysqli_fetch_array($executa)){
					echo "<section class='col-md-4 container' onClick='paraSite()'>
						<div>
						<img src='http://localhost/eagleuniversity/img/conta/avatar.png' width='250px' height='220px' style='padding-left: 2px;'>
						</div>
						<div>
						<h3 style='margin-left: 25px;'>".$linha['nome']."</h3>
						<p>
						<p class='detalhes'>Usuário: ".$linha['usuario']."</p>
						</p>
						</div>
						</section>";
				}
			?>
						
		</h1>
	</div>
</div>
   
</body>
</html> 
