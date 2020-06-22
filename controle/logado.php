<?php
class Login{
	private $logado;
	function __constructor($logado){
		this -> $logado;
	}

	if ($logado == false) {
	echo "<script>

	alert('Faça login para registrar os cursos de sua preferência!');
	</script>";	
	}
	else if ($logado == true){
		echo "<script>
		function esconde(conta, criar-conta){
			conta.style.display = none;
			criar-conta.style.display = none;
		}
		esconde(conta, criar-conta);
		alert('Você está logado!');
		</script>";	
	}
}

$logar = $_GET['logar'];

if ($logar == true) {
	new Login(true);
}
