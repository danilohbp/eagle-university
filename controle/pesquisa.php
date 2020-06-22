<?php

include_once('./conexaobd.php');

$curso = $_POST['curso'];
$curso = "SELECT * FROM curso WHERE nome LIKE '%$curso%' LIMIT 5";
$executa_filtro = mysqli_query($con, $curso);

if (mysqli_num_rows($executa_filtro) <= 0){
	echo "Nada encontrado!";
}
else{
	while($linha = mysqli_fetch_assoc($executa_filtro)){
		Header( "Content-type: image/png");
		echo "<section class='item-curso'>
				<div class='curso-img'>
					<a href='#'></a>
				</div>
				<div class='desc-curso'>
					<h3>".$linha['nome']."</h3>
					<h5>".$linha['especialidade']."</h5>
					<h5>".$linha['descricao']."</h5>
				</div>
			</section>";
	}	
	$querySelecionaPorCodigo = "SELECT codigo, 
imagem FROM tabela_imagens WHERE codigo = 1";
$resultado = mysqli_resul($con, $querySelecionaPorCodigo);
$imagem = mysqli_fetch_object($resultado);
Header( "Content-type: image/png");
echo $imagem->imagem;
}


//<img src='".header('Content-type:image/png')."' width='100px'>

//https://localhost/eagleuniversity/img/optimus_prime.png

//<h5>".$linha_curso['especialidade']."</h5>
//<h5>".$linha_curso['descricao']."</h5>


