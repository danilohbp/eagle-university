<?php

	echo "<a href='http://localhost/eagleuniversity/pages/admin/dom.php'>Painel</a>
	<a href='http://localhost/eagleuniversity/pages/admin/telas/cursos.php'>Cursos</a>
	<a href='http://localhost/eagleuniversity/pages/admin/telas/usuarios.php'>Usuários</a>
	<a href='http://localhost/eagleuniversity/'>Sair";
?>

<?php 
	if (isset($_SESSION['login'])) {
		unset($_SESSION['login']);
	}
	echo "</a>";