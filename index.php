 <?php include 'inc/header.php'; ?>
 <?php include 'lib/student.php'; ?>

 <?php 

   error_reporting(0); // empty data dile je undifine index attend dekhay ta dur korar jonno...eta deoa hoise....
 	$stu = new student();
 	$c_date = date('Y-m-d');

 	$get_stu = $stu->getAllStudent();
  ?>

  <?php 
  	 if ($_SERVER["REQUEST_METHOD"]=='POST') {
  	 	$attend =$_POST['attend'];
  	 	if (empty($attend)) {
  	 		echo  "<div class='alert alert-danger'><storng>Error! Field must not be empty</storng></div>";
  	 	} else{
  	 	$insert_attend = $stu->attendInsert($c_date,$attend);
  	  }
  	 }
   ?>

   <?php 
   		if (isset($insert_attend)) {
   			echo $insert_attend;
   		}
    ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add student</a>
					<a class="btn btn-info pull-right" href="view_all.php">View all</a>
				</h2>
			</div>

			<div class="well text-center">
				<strong style="font-size: 40px;"><?php echo $c_date ?></strong>
			</div>

			<div class="panel-body">
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="25%">Serial</th>
							<th width="25%">Student Name</th>
							<th width="25%">Student Roll</th>
							<th width="25%">Attendance</th>
						</tr>

						<?php 

						 	if ($get_stu) {
					 		 $i = 0;
					 		 while ($value = $get_stu->fetch_assoc()) {
					 		 	$i++;

						 ?>
						<tr>
							<td><?php echo $value['id'] ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><?php echo $value['roll'] ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['roll'] ?>]" value="present">P
								<input type="radio" name="attend[<?php echo $value['roll'] ?>]" value="absent">A
							</td>
						</tr>
						<?php  }
 	                            } ?>
						<tr>
							<td>
							  <input type="submit" class="btn btn-success" name="submit" value="submit">
							</td>
						</tr>
					</table>
				</form>
				
			</div>
			
		</div>

  <?php include 'inc/footer.php'; ?>