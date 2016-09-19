<?php
	$db = new Sqlite3 ('Login.db');
	
	class database{
		public $conn; 
		public function connect(){
			$this->conn = null; 
			
			try{
				$this->$conn = new Sqlite3('Login.db');
			}

			catch(Exception $exception)
			{
				echo 'Can not connecting to the database at this time.';
				echo $this->$db->lastErrorMsg();
			}
		}	
	}
?>