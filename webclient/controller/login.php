<?php
	$db_user = 'root';
	$db_pass = '';
	$db_dsn = 'mysql:host=127.0.0.1;dbname=supinfo_php';
	
	try {
		$pdo = new PDO($db_dsn, $db_user, $db_pass);
	} catch (PDOException $e){
		die("Error : ".$e->getMessage());
	}
	
	if (!isset($_POST["username"]) || !isset($_POST["passw"])){
		die("Please fill all fields");
	}
	
	$username = $_POST['username'];
	$password = $_POST['passw'];
	
	$retrieved_passw_arr = $pdo->query("SELECT PASSWORD FROM  `users` 
	WHERE username =  '".$username."'")->fetch();
	
	$retrieved_passw = $retrieved_passw_arr[0];
	
	if($retrieved_passw != $password){
		die("Incorrect username or password");
	} else {
		//Yeahh Login !
		setcookie("c_logged_username", $username, time()+3600, '/');
		header( "Location: ../editor/vcard_main.php" );
	}
?>