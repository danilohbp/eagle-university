<!DOCTYPE html>
<html>
<head>
	<title>Eagle University API</title>
</head>
<body>
	<?php
		include('../controle/conexaobd.php');
		$sql = "SELECT * FROM usuario";
		$result = mysqli_query($con, $sql);
		$json_array = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$json_array[] = $row;
		}
		echo "<pre>";
		print_r($json_array);
		echo "</pre>";
	?>
</body>
</html>