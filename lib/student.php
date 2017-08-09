<?php include 'database.php'; ?>
 
<?php 
 	
 	class student
 	{
 		private $db;
 		
 		function __construct()
 		{
 			$this->db = new database();
 		}


 		public function getAllStudent()
 		{
 			$query = "SELECT * FROM tbl_student";
 			$result = $this->db->select($query);
 			return $result;
 		}

 		public function insertStudent($name,$roll){
 			$name = mysqli_real_escape_string($this->db->link, $name);
 			$roll = mysqli_real_escape_string($this->db->link, $roll);

 			if (empty($name) || empty($roll))  {
 				$msg = "<div class='alert alert-danger'><storng>Error! Field must not be empty</storng></div>";
 				return $msg;
 			}

 		}
 	}
 ?>