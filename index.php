<?php
	session_start();

	/*class User{
		private $conn; 

		public function sql(){
			$db = new Sqlite3('Login.db');
		}
	}*/

	include('login.php');
	include('header.html');
?>


	<hr>
	<?php
		if($db){
				echo 'samband'; 
		}
	?>
	 <div class="modal-body">

	 <div class="row">
	 	<div class="col-md-5">
	 		<label>Create a new account</label>
	 			<p>First name</p><br> 
	 			<p>Last name</p><br>
	 			<p>Choose a username</p><br>
	 			<p>Create a password</p><br>
	 			<p>Confirm your password</p><br>
	 			<p>Deaf/hear/hard of hear</p>
	 	</div>
	 	<div class="col-md-5">
	 		<label>Sign in</label>
	 	</div>
	 </div>	

	 <div class="row">
	 	<div class="col-md-3"></div>
	 	   <div class="col-md-6 midja">
	 	   	 <label>Sign in</label> <label>Create an account</label>
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

 <?php
 include('footer.html');
 ?>
