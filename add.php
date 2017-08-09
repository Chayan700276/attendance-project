 <?php include 'inc/header.php'; ?>
 <?php include 'lib/student.php' ?>

 <?php 
 	$stu = new student();
 	if($_SERVER['REQUEST_METHOD']=='POST'){
 		$name = $_POST['name'];
 		$roll = $_POST['roll'];
 		$insert_stud = $stu->insertStudent($name,$roll);
 	}
  ?>

  <?php 
  		if (isset($insert_stud)) {
  			echo $insert_stud;
  		}
   ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add student</a>
					<a class="btn btn-info pull-right" href="index.php">Back</a>
				</h2>
			</div>

			<div class="panel-body">
				<form action="" method="post">

					<div class="form-group">
						<label>Student Name</label>
						<input class="form-control" type="text" name="name" id="name">
					</div>
					<div class="form-group">
						<label>Student Roll</label>
						<input class="form-control" type="text" name="roll" id="roll">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit">
					</div>

				</form>
				
			</div>
			
		</div>

  <?php include 'inc/footer.php'; ?>