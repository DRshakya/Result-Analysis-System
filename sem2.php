<?php
session_start();

$con = mysql_connect('localhost', 'root');
// if($con)
// {
// 	echo "Connection successful";
// }
// else{
// 	echo "no connection";
// }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
</head>
<body>
<header>
	<div class="container center-div shadow">
	<div class="heading mb-0 text-center text-uppercase text-white">Enter Marks</div>
	<div class="container  d-flex flex-row justify-content-center mb-0">
		<div class="admin-form shadow p-2">
			<form action="logincheck.php" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Roll Id</label>
					<input type="text" name="rollid" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Structured Programming</label>
					<input type="text" name="sp" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Data Communication and Computer Network</label>
					<input type="text" name="dccn" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Business Communications</label>
					<input type="text" name="BC" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Discrete Mathematics</label>
					<input type="text" name="dm" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Sociology for Business</label>
					<input type="text" name="so" value="" class="form-control" autocomplete="off">
				</div>
				<input type="submit" class="btn btn-success" name="">
				
			</form>
			
		</div>
	</div>
		
	</div>
</header>

</body>
</html>