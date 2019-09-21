<?php
	/*$db_user = "php_client";
	$db_pass = "wDEt8v9cy3hEDwsf";*/
	$db_user = 'root';
	$db_pass = '';
	$db_dsn = 'mysql:host=127.0.0.1;dbname=supinfo_php';
	
	try {
		$pdo = new PDO($db_dsn, $db_user, $db_pass);
	} catch (PDOException $e){
		die("Error : ".$e->getMessage());
	}
	
	if (!isset($_POST["username"]) || !isset($_POST["passw"])
	|| !isset($_POST["email"]) || !isset($_POST["passwc"])){
		die("Please fill all fields");
	}
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['passw'];
	$passwordc = $_POST['passwc'];
	
	if($password != $passwordc){
		die("Mismatch passwords");	
	}
	
	$pdo->exec("INSERT INTO  `supinfo_php`.`users` (
		`_id` ,
		`username` ,
		`password` ,
		`email`
		)
		VALUES (
		NULL ,  '".$username."',  '".$password."',  '".$email."'
		);");
		
	header( "Location: ../index.php" );
?>