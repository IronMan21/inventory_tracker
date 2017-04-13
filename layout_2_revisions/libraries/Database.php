<!-- connecting to mysqli database  -->
<!-- create mysqli functions -->
<?php 
	class Database{
		public $host = DB_HOST;
		public $username =  DB_USER;
		public $db_name = DB_NAME;
		public $pass = DB_PASS;

		public $link; // serves as mysqli object
		public $error;

		// constructor
		public function __connect(){
			// calling connect function below
			$this->connect(); 
		}

		public function connect(){
			this->link = new mysqli($this->host, $this->username, $this->pass, $this->db_name);
			// testing for failed connection to database
			if(!$this->$link) {
				$this->error = "Connection failed: ".$this->link->connect_error;
				return false;
			}
		}


	}
?>