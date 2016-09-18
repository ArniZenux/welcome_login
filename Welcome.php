<?php
	session_start();
	include('header.html');
	include('database_connect.php');
	//include('user.php');
	$id = $_SESSION['id'];
	//$user = $_SESSION['user'];
?>
	<hr>
	<?php
		$res = $db->query("SELECT FIRSTNAME, LASTNAME, SIMANUMER FROM ACCOUNTS, PHONEBOOK, OWN WHERE ID = ID_ACC AND ID_PHONE = NR AND ID = '$id';");
		while( $row = $res->fetchArray() ){
			echo 'First name: '.$row[0].'<br>';
			echo 'Last name: '.$row[1].'<br>';
			echo 'Phonenumer: '.$row[2].'<br>';
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