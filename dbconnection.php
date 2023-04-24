<?php
$servername = "localhost";
$username = "root";
$password = "";
	$conn = new pdo( 'mysql:host=localhost;dbname=text-base game', $username, $password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>