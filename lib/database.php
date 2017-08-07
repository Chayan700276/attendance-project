<?php 

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../config/config.php');
	
	class database
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


		public function select($query){
			$result = $this->link->query($query) or die ($this->link->error.__LINE__);
			if ($result->num_rows>0) {
				return $result;
			}else{
				return false;
			}
		}

		public function insert($query){
			$insert_row = $this->link->query($query) or die ($this->link->error.__LINE__);
			if ($insert_row) {
				return $insert_row;
			}
		}

		public function update($query){
			$update_row = $this->link->query($query) or die ($this->link->error.__LINE__);
			if ($update_row) {
				return $update_row;
			}else{
				return false;
			}
		}

		public function delete($query){
			$delete_row = $this->link->query($query) or die ($this->link->error.__LINE__);
			if ($delete_row) {
				return $delete_row;
			}else{
				return false;
			}
		}
	}
 ?>