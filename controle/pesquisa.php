<?php

include('./conexaobd.php');

$curso = $_POST['curso'];
$curso = "SELECT * FROM curso WHERE nome LIKE '%$curso%' LIMIT 5";
$executa_filtro = mysqli_query($con, $curso);

if (mysqli_num_rows($executa_filtro) <= 0){
	echo "<div style='margin-top: 20px;'>
			<img src='http://localhost/eagleuniversity/img/imagens_erro/broken_robot.png'>
			<h1>Nada encontrado!</h1>
			</div>";
}
else{
	while($linha = mysqli_fetch_assoc($executa_filtro)){
		Header( "Content-type: image/png");

		if ($linha['situacao']=='Aberto') {
			$designSituacao = 'border: 1px solid #00ff00; color: #00ff00;';
		}
		if ($linha['situacao']=='Fechado') {
			$designSituacao = 'border: 1px solid #ff0000; color: #ff0000;';
		}
		if ($linha['situacao']=='Em preparação') {
			$designSituacao = 'border: 1px solid #007bff; color: #007bff;';
		}
		if ($linha['situacao']=='Desconhecido') {
			$designSituacao = 'border: 1px solid #ff8000; color: #ff8000;';
		}

		echo "<section class='item-curso col-md-12' onClick='paraSite()'>
				<div class='curso-img'>
					<img src="."http://localhost/eagleuniversity/img/cursos/programacao/".$linha['imagem']." width='250px' height='220px' style='padding-left: 2px;'>
				</div>
				<div class='desc-curso'>
					<h3 style='margin-left: 25px;'>".$linha['nome']."</h3>
					<img src='http://localhost/eagleuniversity/img/cursos/icons/star32.png' class='favoritos'/>
					<p id='situacao' class='situacoes' style='".$designSituacao."'>".$linha['situacao']."</p>
					
					<p>
						<a href=".$linha['site']." target='_blank' style='font-size: 16px;'><span style='color:#000'>SITE: </span>".$linha['site']."</a>
						<p class='detalhes'>Duração: ".$linha['duracao']."</p>
						<p class='detalhes'>Atualizado em: ".date('d/m/Y', strtotime($linha['data']))."</p>
						<p class='detalhes'>Especialidade: ".$linha['especialidade']."</p>
						<p class='detalhes'>Descrição: ".$linha['descricao']."</p>

					</p>

					
				</div>
				</section>";
	}	
}
