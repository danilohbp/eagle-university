<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	  	<meta name="description" content="Sistema de cadastro de usuários consultantes de listas de cursos de universidades. Trabalho de Laboratório de Banco de Dados - FATEC Itapetininga">
	  	<meta name="keywords" content="Sistema,Fatec,Laboratório, Banco de Dados">
	  	<meta name="author" content="Danilo Henrique Barbosa Pires">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Consulta</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/eagleuniversity/css/styles.css">
	</head>
	<body class="login">
		<div class="centraliza">
				
			<form action="http://localhost/eagleuniversity/controle/criar-conta.php" method="POST" class="formulario" type ="submit" name="submit" autocomplete="off">
				
				<div class="">
				  	<div class="row">
					    <div class="col-md-4 cadastro_img" height="auto">
					    	<img src="http://localhost/eagleuniversity/img/conta/eagleuniversity_signup.png" class="card-img" alt="Logo da Consulta Certa">
					    </div>
					    <div class="col-md-8">
					    	<div class="card-body">
					    		<center>
					    			<h1 class="card-title centraliza">EagleList</h1>	
					    		</center>
					    		
						        <p class="card-text">Entre e acesse o sistema do EagleList. Nele você vai poder conhecer os melhores cursos à distância.</p>
						    	
						    </div>
						    <div class="col">
						    	<label>Nome</label>
						    	<input type="text" class="form-control" placeholder="Nome completo" name = "nome" minlength="2" maxlength="40">
						    </div>
						
							<div class="form-group col">
						      	<label>Usuário</label>
						      	<input type="text" class="form-control" id="inputEmail4" placeholder="Nome de utilizador" name= "pseudonimo">
						    </div>
						    <div class="form-group col">
							    <label>Senha</label>
							    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name ="senha" minlength="8" maxlength="14">
						    </div>
							<div>
								<center id="teste1">
									<button type="submit" class="btn btn-primary botao" name = "btn">Cadastrar</button>	
						
									<a href="http://localhost/eagleuniversity/pages/login.php" class="botao">Log in</a>		
								</center>
						    	
						    </div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script>
			
		</script>
	</body>
</html>