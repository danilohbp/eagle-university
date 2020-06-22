<html>
<head>
        <title>Upload de imagens com PHP</title>
        <meta charset="utf-8"/>
</head>
<body>
    <form action="armazenar.php" method="POST" enctype="multipart/form-data">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem"/>
        <br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
<?php
	 
	$imagem = $_FILES["imagem"];
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "eagleuniversity";
	 
	if($imagem != NULL) { 
	    $nomeFinal = time().'.png';
	    if (copy($imagem['tmp_name'], $nomeFinal)) {
	        $tamanhoImg = filesize($nomeFinal); 
	 
	        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
	 
	        mysql_connect($host,$username,$password) or die("Impossível Conectar"); 
	 
	        @mysql_select_db($db) or die("Impossível Conectar"); 
	 
	        mysql_query("INSERT INTO pessoa (PES_IMG) VALUES ('$mysqlImg')") or
	        die("O sistema não foi capaz de executar a query"); 
	 
	        unlink($nomeFinal);
	         
	        header("location:exibir.php");
	    }
	} 
	else { 
	    echo"Você não realizou o upload de forma satisfatória."; 
	} 
	 
?>
</html>