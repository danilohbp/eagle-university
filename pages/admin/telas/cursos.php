<?php
	include('../../../controle/conexaobd.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<link rel='stylesheet' type='text/css' href='http://localhost/eagleuniversity/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='http://localhost/eagleuniversity/css/admin.css'>
</head>
<body>

<div class="sidenav">
  <?php include('../sidenav/sidenav.php');?>
</div>

<div class="main">
	<center>
		<h1>CADASTRE CURSOS</h1>
	</center>
	<hr>
	<form method="POST" action="http://localhost/eagleuniversity/controle/crudCurso/cadastrocursos.php" enctype="multipart/form-data" style="background-image: linear-gradient(to right, #66ff66 , #00cc00);">
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="nomeCurso">Nome do curso</label>
				<input type="text" name="nome" class="form-control" id="nomeCurso" placeholder="Informe o nome do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="nomeCurso">Informe o site do curso</label>
				<input type="text" name="site" class="form-control" id="nomeCurso" placeholder="Informe o link do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Especialidade</label>
				<input type="text" name="especialidade" class="form-control" id="especialidadeCurso" placeholder="Informe o conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Duração</label>
				<input type="text" name="duracao" class="form-control" id="especialidadeCurso" placeholder="Informe a duração do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Descrição</label>
				<input type="text" name="descricao" class="form-control" id="especialidadeCurso" placeholder="Informe a descrição do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Data</label>
				<input type="date" name="data" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Situação</label>
				<input type="text" name="situacao" class="form-control" id="especialidadeCurso" placeholder="Informe a situação do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Logo do Curso</label>
				<input type="file" name="img" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Cadastrar</button>		
			</div>
			
		</div>
		
	</form>




	<center>
		<h1>ATUALIZAÇÃO MANUAL DE CURSOS</h1>
	</center>
	<hr>
	<form method="POST" action="http://localhost/eagleuniversity/controle/crudCurso/cadastrocursos.php" enctype="multipart/form-data" style="background-image: linear-gradient(to right, #ffb366 , #ff8c1a);">
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="sel1">Selecione o curso</label>
				<select class="form-control" id="sel1" name="cursos">
					<?php
						
						$cursos = "SELECT * FROM curso";
						$executa_filtro = mysqli_query($con, $cursos);
						echo "<option value=''></option><br>";
						while($linha = mysqli_fetch_assoc($executa_filtro)){
							echo "<option value='".$linha['nome']."'>".$linha['nome']."</option><br>";
						}
						
						$site = $_POST['cursos'];
					?>
				</select>
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="nomeCurso">Modificar site de curso?</label>
				<input type="text" name="site" class="form-control" id="nomeCurso" placeholder="Informe o nome do curso" value=<?php echo $site;?>>
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modificar Especialidade?</label>
				<input type="text" name="especialidade" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modificar Duração?</label>
				<input type="text" name="duracao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modificar Descrição?</label>
				<input type="text" name="descricao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modificar Data?</label>
				<input type="date" name="data" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modifcar Situação?</label>
				<input type="text" name="situacao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Modifcar Logo do Curso?</label>
				<input type="file" name="img" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Atualizar</button>		
			</div>
			
		</div>
		
	</form>


	<center>
		<h1>DELETE CURSOS<span></span></h1>
	</center>
	<hr>
	<form method="POST" action="http://localhost/eagleuniversity/controle/crudCurso/cadastrocursos.php" enctype="multipart/form-data" style="background-image: linear-gradient(to right, #ff4d4d , #ff0000);">
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="nomeCurso">Nome do Curso</label>
				<input type="text" name="nome" class="form-control" id="nomeCurso" placeholder="Informe o nome do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Especialidade</label>
				<input type="text" name="especialidade" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Duração</label>
				<input type="text" name="duracao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Descrição</label>
				<input type="text" name="descricao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Data</label>
				<input type="date" name="data" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Situação</label>
				<input type="text" name="situacao" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group col-md-5 mb-3">
				<label for="especialidadeCurso">Logo do Curso</label>
				<input type="file" name="img" class="form-control" id="especialidadeCurso" placeholder="Informe conteúdo do curso">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-1"></div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Cadastrar</button>		
			</div>
		</div>
	</form>

	<center>
		<h2>Cadastro automático de cursos - Eagle Bot</h2>
	</center>
</div>
   
</body>
</html> 
