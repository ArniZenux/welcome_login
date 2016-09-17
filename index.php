<?php
	include("login.php");
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
<!--	<header>
	    <div class="row">
			<div class="col-lg-4">
				<div class="intro_header_right">
					<a href="index.php">Dagbók Árna</a>
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
	</header> --> 

	<hr>
	<?php
		if($db){
				echo 'samband'; 
		}
	?>
	 <div class="modal-body">
	 <div class="row">
	 	<div class="col-md-3"></div>
	 	   <div class="col-md-6 midja">
			   <form method="POST" action="" class="form col-md-10 center-block">
		            <div class="form-group">
		      		  <label>User</label>
		              <input type="text" class="form-control input-lg" placeholder="User" name="user">
		            </div>
		            <div class="form-group">
		              <label>Password</label>
		              <input type="password" class="form-control input-lg" placeholder="Password" name="pass">
		            </div>
		            <div class="form-group">
		            	<input type="submit" name="submit" value="innskra" class="btn btn-primary btn-lg btn-block">		        
		            </div>
		        <?php
		      		echo $message;
		      	?>
		      </form>
		     
	     	</div>
	  	 <div class="col-md-3"></div>
      </div>
    </div>
 </div>
<footer>
	
</footer>
</body>
</html>