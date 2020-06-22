<?php
$servername = "localhost";
$database = "eagleuniversity";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database)or die
 ("Sem conexão com o servidor");