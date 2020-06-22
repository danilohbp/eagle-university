<?php
	$path = explode('/', $_GET['path']);

	$contents = file_get_contents('../pages/teste.json');

	$json = json_decode($contents, true);

	$method = $_SERVER['REQUEST_METHOD'];

	header('Content-type: application/json');

	$body = file_get_contents('php://input');

	if ($method == 'GET'){
		if($json[$path[0]]){
			echo json_encode($json[$path[0]]);
		}
		else{
			echo '[]';
		}
	}
?>