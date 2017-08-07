<!DOCTYPE html>
<html>
<head>
	<title>Attence management system</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<script type="text/javascript" src="inc/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="well text-center">
			<h2>Attendace management system</h2>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add student</a>
					<a class="btn btn-info pull-right" href="add.php">View all</a>
				</h2>
			</div>

			<div class="well text-center">
				<strong style="font-size: 40px;"><?php echo $c_date = date('Y-m-d') ?></strong>
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
						<tr>
							<td>01</td>
							<td>Chayan roy</td>
							<td>700276</td>
							<td>
								<input type="radio" name="attend" value="present">P
								<input type="radio" name="attend" value="absent">A
							</td>
						</tr>
						<tr>
							<td>
							  <input type="submit" class="btn btn-success" name="submit" value="submit">
							</td>
						</tr>
					</table>
				</form>
				
			</div>
			
		</div>

       <div class="row">
			<div class="well">
				Practice :chayan roy cmt..
				<span class="pull-right">just learning</span>
			</div>
	   </div>
	</div>
</body>
</html>