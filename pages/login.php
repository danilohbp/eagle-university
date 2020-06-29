<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sistema de cadastro de usuários consultantes de listas de cursos de universidades. Trabalho de Laboratório de Banco de Dados - FATEC Itapetininga">
	  	<meta name="keywords" content="Sistema,Fatec,Laboratório, Banco de Dados">
	  	<meta name="author" content="Danilo Henrique Barbosa Pires">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<title>Log In</title>
	  	<link rel="shortcut icon" href="http://localhost/eagleuniversity/img/eagle_favicon.png"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/styles.css">
	</head>
	<body class="login">
		<div class="centraliza">	
			<form action="http://localhost/eagleuniversity/controle/acessar_conta.php" method="POST" class="formulario" type ="submit" name="submit" autocomplete="off">
				<div class="centraliza">
				  	<div class="row">
					    <div class="col-md-12">
					    	<div class="card-body">
					    		<center>
					    			<img src="http://localhost/eagleuniversity/img/conta/university.svg" width="180" id="icone-avatar" title="avatar">	
					    		</center>
						    </div>
						    <center>
								<div class="form-group col-md-10">
							      	<label for="inputEmail4">Usuário</label>
							      	<input type="text" class="form-control" id="inputEmail4" placeholder="Nome de utilizador" name= "pseudonimo">
							    </div>
							    <div class="form-group col-md-10">
								    <label for="inputPassword4">Senha</label>
								    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name ="senha">
								    
							    </div>
								<div>
									<center id="teste1">
										
										<button type="submit" class="btn btn-primary botao" name = "btn">Entrar</button>	
										<a href="http://localhost/eagleuniversity/pages/cadastro.php">Criar conta?</a>
									</center>
							    	
							    </div>	
						    </center>
						    
						</div>
					</div>
				</div>
			</form>
			<p style="color: red;">
				<?php
					if (isset($_SESSION['errologin'])) {
						echo $_SESSION['errologin'];
						unset($_SESSION['errologin']);
					}
				?>
			</p>
		</div>
	</body>
</html>