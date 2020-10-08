<?php
session_start();

$con = mysql_connect('localhost', 'root');
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
	<div class="heading mb-5 text-center text-uppercase text-white">Get Your Result</div>
	<div class="container  d-flex flex-row justify-content-center mb-5">
		<div class="admin-form shadow p-2">
			<form action="semesterlist.php" method="POST">
				<input type="submit" class="btn btn-success" name="">
				<div class="form-group">
					<label>Batch</label>
					<input type="text" name="admin" value="" class="form-control" autocomplete="off" list="numbers" name="number">
					 <input list="numbers" name="number"> 
					<datalist id="numbers">
						<option value="10"></option>
						<option value="11"></option>
						<option value="12"></option>
						<option value="13"></option>
						<option value="14"></option>
						<option value="15"></option>
					</datalist>
				</div>
				
			</form>
			
		</div>
	</div>
		
	</div>
</header>

</body>
</html>