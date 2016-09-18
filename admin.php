<?php 
	include("database_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/landing-page.css">
</head>
<body>
<div class="container"> 
	<hr>
	<?php
		if($db){
				echo 'samband'; 
		}
	?>
	
	<?php
		$res = $db->query("SELECT FIRSTNAME, LASTNAME, SIMANUMER FROM ACCOUNTS, PHONEBOOK , OWN WHERE ID = ID_ACC AND ID_PHONE = NR;");
		while( $row = $res->fetchArray() ){
			echo '<hr>';
			echo 'First name: '.$row[0].'<br>';
			echo 'Last name: '.$row[1].'<br>';
			echo 'Phonenumer: '.$row[2].'<br>';
		}
	?>

	<br>
	<a href="logout.php">Útskrá</a>
 </div>
</body>
</html>