<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="keyword" content="API"/>
	<meta name = "author" content="Adaucto, daniloHBP, Rodrigo Soares Rocha"/>
	<title>Eagle University API</title>
</head>
<body>
	<?php
		include('vendor/autoload.php');
		include('../controle/conexaobd.php');
		$sql = "SELECT * FROM curso";
		$result = mysqli_query($con, $sql);
		$json_array = array("cursos_ead" => array());
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($json_array["cursos_ead"], $row);
		}
		dump($json_array);
	?>
</body>
</html>