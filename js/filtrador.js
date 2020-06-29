$(function(){
	$("#pesquisa").keyup(function(){
		var pesquisa = $(this).val();
		if (pesquisa != '') {
			var dados = {
				curso: pesquisa
			}
			$.post("http://localhost/eagleuniversity/controle/pesquisa.php", dados, function(retorna){
				$(".listagem-cursos").html(retorna);
			});
		} else{
			$(".listagem-cursos").html("");
		}
	});
});