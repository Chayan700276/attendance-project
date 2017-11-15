 <?php include 'inc/header.php'; ?>
 <?php include 'lib/student.php'; ?>

 <?php 

 	$stu = new student();

 	$get_attend = $stu->getAllAttendance();
  ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add student</a>
					<a class="btn btn-info pull-right" href="index.php">Back</a>
				</h2>
			</div>

			<div class="panel-body">

				<table class="table">
  <caption>Attendance list by date</caption>
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Date</th>
      <th colspan="3" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		if ($get_attend) {
  			$i =0;
  			while ($result = $get_attend->fetch_assoc()) {
  			$i++;
  				
  	 ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $result['att_time'] ?></td>
      <td>
      	<a class="btn btn-primary" href="show_attendance.php?att_date=<?php echo $result['att_time'] ?>">View</a>
      	<a class="btn btn-default" href="">Edit</a>
      	<a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    <?php } } ?>
  </tbody>
</table>	
				
			</div>
			
		</div>

  <?php include 'inc/footer.php'; ?>