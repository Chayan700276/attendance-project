 <?php include 'inc/header.php'; ?>
 <?php include 'inc/header.php'; ?>
 <?php include 'lib/student.php'; ?>

 <?php 
     $attend_date = '';
  if (isset($_GET['att_time'])) {
    $attend_date = $_GET['att_time'];
    $_SESSION['date'] = $attend_date;
    

  }


 	$stu = new student();

 	$att_by_date = $stu->getAttendanceByDate($attend_date);

  ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add student</a>
					<a class="btn btn-info pull-right" href="view_all.php">Back</a>
				</h2>
			</div>

			<div class="panel-body">

				<table class="table">
  <caption>Attendance date : <?php if (isset($_SESSION['date'])) {
     echo $_SESSION['date'];
  } ?></caption>
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Date</th>
      <th colspan="3" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		if ($att_by_date) {
  			$i =0;
  			while ($result = $att_by_date->fetch_assoc()) {
  			$i++;
  				
  	 ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $result['roll'] ?></td>
      <td><?php $f = $result['att_time'] ?></td>
      <td>
      </td>
    </tr>
    <?php } } ?>
  </tbody>
</table>	
				
			</div>
			
		</div>

  <?php include 'inc/footer.php'; ?>