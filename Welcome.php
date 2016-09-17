<?php
	session_start();
	include('database_connect.php');
	//include('user.php');
	$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dagbók Árna</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/landing-page.css">
</head>
<body>
<div class="container"> 
	<!--<header>
	    <div class="row">
			<div class="col-lg-4">
				<div class="intro_header_right">
					<p> Dagbók Árna </p>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="intro_header_left">
					<ul class="list">
						<li><a href="um.html">Um dagbók</a></li>
						<li><a href="innskra.php">Innskrá</a></li>
						<li><a href="nyskra.php">Nýskráning</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>-->
	
	<hr>
	<?php
		$res = $db->query("SELECT * FROM ACCOUNTS WHERE ID='$id';");
		while( $row = $res->fetchArray() ){
			echo 'First name: '.$row[1].'<br>';
			echo 'Last name: '.$row[2];
		}
	?>

	<br>
	<a href="logout.php">Útskrá</a>
		
	<!-- <section>
 		<article>
 			<div class="row">
 					<div class="col-lg-6 col-sm-6">
	 					<div class="titli">	
	 						
	 					</div>
 					</div> 				
 					<div class="col-lg-6 col-sm-6">
 						<div class="titli">	
 							
 						</div>
 					</div>
 			</div>
 			<div class="grein">
 				
 			</div>
 		</article>
	</section>
	-->

</div>
<footer>
	
</footer>
</body>
</html>