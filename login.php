<?php
	include_once("database_connect.php");
	session_start(); 
	$message = ' hello ';
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$res = $db->query("SELECT * FROM LOGIN WHERE USER = '$user' AND PASS = '$pass';");
		$row = $res->fetchArray();
	
		if($row[1] == $user){
			$_SESSION['id']	  = $row[0];
			//$id = $_SESSION['id'];
			//$_SESSION['user'] = $user;
			//$_SESSION['pass'] = $pass;
			//$_SESSION['nr']   = $row[3];  //   [ user, pass, nr]
			ob_start(); 
			header('location: Welcome.php');
			exit(); 
			//$message = $user.' og '.$id ;
		}
		else{
			$message = 'Ekki rett';
		}
	}
?>