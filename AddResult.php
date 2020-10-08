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
	<div class="container center-div shadow " style="width: 40%; right: :50%;">
	<div class="heading mb-5 text-center text-uppercase text-white">Add Results</div>
	<div class="container  d-flex flex-row justify-content-center mb-5">
		<div class="admin-form shadow p-2">
			<form action="AddResultCheck.php" method="POST">
					<div class="form-group">
					<label>Enter Exam Type</label>
					<input type="text" name="exam" value="" class="form-control" autocomplete="off" list="exam" >
					<!-- <datalist id="exam">
						<option value="Class Test"></option>
						<option value="Mid Term"></option>
						<option value="Pre-Board"></option>
						<option value="Board"></option>
					</datalist> -->
				</div>
				<div class="form-group">
					<label>Enter Semester</label>
					<input type="text" name="sem" value="" class="form-control" autocomplete="off" list="semester" >
					<!-- <datalist id="semester">
						<option value="1"></option>
						<option value="2"></option>
						<option value="3"></option>
						<option value="4"></option>
						<option value="5"></option>
						<option value="6"></option>
						<option value="7"></option>
						<option value="8"></option>
					</datalist> -->
				</div>
				<input type="submit" class="btn btn-success" name="">	
			</form>	
		</div>
	</div>	
</div>
</header>

</body>
</html>