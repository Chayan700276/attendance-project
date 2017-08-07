<?php 
	
	class ClassName extends AnotherClass
	{

		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;

		public $link;
		public $error;

		
		function __construct(argument)
		{
			$this->ConnectDB();
		}

		public function ConnectDB(){
			$this->link = new mysqli($this-host,$this->user,$this->pass,$this->dbname);
			if (!$this->link) {
				$this->error = "Connection failed".$this->link->Connect_error;
				return false;
			}
		}
	}
 ?>