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
		$sql = "SELECT * FROM usuario";
		$result = mysqli_query($con, $sql);
		$json_array = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$json_array[] = $row;
		}
		/*echo "<pre>";
		print_r($json_array);
		echo "</pre>";*/
		dump($json_array);
	?>
</body>
</html>