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
 			}else{
 				$query = "INSERT INTO  tbl_student (name,roll)VALUES('$name','$roll')";
 				$stu_insert = $this->db->insert($query);

 				$query = "INSERT INTO  tbl_attendace (roll)VALUES('$roll')";
 				$stu_insert = $this->db->insert($query);

 				if ($stu_insert) {
 					$msg = "<div class='alert alert-success'><storng>Success! Inserted succesfully</storng></div>";
 				return $msg;
 				}else{
 					$msg = "<div class='alert alert-danger'><storng>Error! Data Inserted failed</storng></div>";
 				return $msg;
 				}
 			}

 		}

     public function attendInsert($c_date,$attend = array()){
     	$query = "SELECT DISTINCT att_time FROM tbl_attendace";
     	$getdata = $this->db->select($query);
     	 while ($result = $getdata->fetch_assoc()) {
     	 	$db_date = $result['att_time'];
     	 	if ($c_date == $db_date) {
     	 		$msg = "<div class='alert alert-danger'><storng>Error! Attendance already inserted </storng></div>";
 				  return $msg;
     	 	}
     	 }

     	 foreach ($attend as $atn_key => $atn_value) {
     	 	if ($atn_value == "present") {
     	 		$stu_query = "INSERT INTO tbl_attendace (roll,attend,att_time)VALUES('$atn_key','present',now())";

     	 		$data_insert = $this->db->insert($stu_query);
     	 	}elseif($atn_value == "absent"){
     	 		$stu_query = "INSERT INTO tbl_attendace (roll,attend,att_time)VALUES('$atn_key','absent',now())";
     	 		$data_insert = $this->db->insert($stu_query);
     	 	}
     	 }


			if ($data_insert) {
				$msg = "<div class='alert alert-success'><storng>Success! Attendance data Inserted succesfully</storng></div>";
			return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><storng>Error! Attendance Data failed</storng></div>";
			return $msg;
			}

     }
     public function getAllAttendance(){
          $query = "SELECT DISTINCT att_time FROM tbl_attendace";
          $data = $this->db->select($query);
          if ($data) {
               return $data;
          }

     }

     public function getAttendanceByDate($att_time){
          $query = "SELECT  * FROM tbl_attendace WHERE att_time = '$att_time'";
          $att_data = $this->db->select($query);
          if ($att_data) {
               return $att_data;
          }
     }




 	}
 ?>