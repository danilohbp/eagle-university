<?php
	session_start();

	echo "<header>
	<nav class='navbar bg-nav'>
		<ul>
			<li>
				<a href='https://localhost/eagleuniversity/' alt = 'Eagle University'>
					<img src='https://localhost/eagleuniversity/img/eagleuniversity.png' width='40px' height='40px'>
				</a>
			<li>
				
			<li>
				<a class='nav-link' href='https://localhost/eagleuniversity/index.php'>Início</a>
			</li>
			<li>
				<a class='nav-link' href='https://localhost/eagleuniversity/api/api.php'>API</a>
			</li>
			<li class = 'nav-item dropdown'>
				<div class='dropdown'>
					<a class='btn dropdown-toggle nav-link' type='a' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					Cursos
					</a>
					<div class='dropdown-menu' aria-labelledby='dropdownMenuButton' class='sub_itens'>
						<a class='dropdown-item' href='https://localhost/eagleuniversity/pages/cursos/programacao.php'>
						Programação</a>
						<a class='dropdown-item' href='https://localhost/eagleuniversity/pages/cursos/hardware.php'>Hardware</a>
						<a class='dropdown-item' href='https://localhost/eagleuniversity/pages/cursos/arquitetura.php'>Arquitetura de Softwares</a>
						<a class='dropdown-item' href='https://localhost/eagleuniversity/pages/cursos/matematica.php'>Matemática para Computação</a>
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
		
	</nav>
	</header>";

	if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
		echo "<script>
			var escondeConta = document.querySelector('#conta')
			escondeConta.style.display = 'none'
			var escondeCriarConta = document.querySelector('#criar-conta')
			escondeCriarConta.style.display = 'none'
			imagem = document.createElement('img')
			imagem.setAttribute('src', 'http://localhost/eagleuniversity/img/avatar.png')
			imagem.setAttribute('width', '50px')
			imagem.setAttribute('id', 'usuario')
			imagem.setAttribute('title', '".$_SESSION['login']."')
			avatar = document.querySelector('.conta')
			avatar.appendChild(imagem)

		</script>";
	}