<?php
	session_start();

	echo '
	<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
  	<a class="navbar-brand" href="#">
  		<img src="https://localhost/eagleuniversity/img/eagleuniversity.png"
				class="d-inline-block align-top" width="40px" height="40px">
  	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link text-white" href="http://localhost/eagleuniversity/index.php">Início</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="http://localhost/eagleuniversity/api/api.php">API</a>
			</li>
			<li class = "nav-item dropdown">
				<div class="dropdown">
					<a class="btn dropdown-toggle nav-link text-white" type="a" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Cursos
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" class="sub_itens">
						<a class="dropdown-item" href="http://localhost/eagleuniversity/pages/cursos/programacao.php">
						Programação</a>
						<a class="dropdown-item" href="http://localhost/eagleuniversity/pages/cursos/hardware.php">Hardware</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="http://localhost/eagleuniversity/pages/sobre.php">Sobre nós</a>
			</li>
		</ul>
		<ul class="conta">
			<li class = "nav-link floating-right text-white" id="conta" title="Acesse a sua conta !">
				<a href = "http://localhost/eagleuniversity/pages/login.php">Sign in</a>
			</li>
			<li class = "nav-link floating-right" id="criar-conta" title="Não possui uma conta ? Sem problemas clique aqui.">
				<a href = "http://localhost/eagleuniversity/pages/cadastro.php">Sign up</a>
			</li>
			<span class="collapse">Hello</span>
		</ul>
	</div>
</nav>';

	if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
		echo "<script>
		var escondeConta = document.querySelector('#conta')
		escondeConta.style.display = 'none'
		var escondeCriarConta = document.querySelector('#criar-conta')
		escondeCriarConta.style.display = 'none'
		imagem = document.createElement('img')
		imagem.setAttribute('src', 'http://localhost/eagleuniversity/img/conta/avatar.png')
		imagem.setAttribute('width', '50px')
		imagem.setAttribute('id', 'usuario')
		imagem.setAttribute('title', '".$_SESSION['login']."')
		avatar = document.querySelector('.conta')
		avatar.appendChild(imagem)
		avatar.setAttribute('id', 'avatar')</script>";
	}




/*<div class='collapse navbar-collapse' id='navbarNav'>
			<a href='http://localhost/eagleuniversity/'  class = 'navbar-brand' alt = 'Eagle University'>
				<img src='https://localhost/eagleuniversity/img/eagleuniversity.png' width='30px' height='30px'
				class='d-inline-block align-top'>
			</a>

			<ul class='navbar-nav'>	
				<li class=''>
					<a class='nav-link' href='http://localhost/eagleuniversity/index.php'>Início</a>
				</li>
				<li>
					<a class='nav-link' href='http://localhost/eagleuniversity/api/api.php'>API</a>
				</li>
				<li class = 'nav-item dropdown'>
					<div class='dropdown'>
						<a class='btn dropdown-toggle nav-link' type='a' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
						Cursos
						</a>
						<div class='dropdown-menu' aria-labelledby='dropdownMenuButton' class='sub_itens'>
							<a class='dropdown-item' href='http://localhost/eagleuniversity/pages/cursos/programacao.php'>
							Programação</a>
							<a class='dropdown-item' href='http://localhost/eagleuniversity/pages/cursos/hardware.php'>Hardware</a>
						</div>
					</div>
				</li>
				<li>
					<a class='nav-link' href='http://localhost/eagleuniversity/pages/sobre.php'>Sobre nós</a>
				</li>
				
			</ul>
			<ul class='conta'>
				<li class = 'nav-link floating-right' id='conta' title='Acesse a sua conta !'>
					<a href = 'http://localhost/eagleuniversity/pages/login.php'>Sign in</a>
				</li>
				<li class = 'nav-link floating-right' id='criar-conta' title='Não possui uma conta ? Sem problemas clique aqui.'>
					<a href = 'http://localhost/eagleuniversity/pages/cadastro.php'>Sign up</a>
				</li>
			</ul>
		</div>*/

