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
	<div class="heading mb-5 text-center text-uppercase text-white">ADMIN LOGIN PAGE</div>
	<div class="container  d-flex flex-row justify-content-center mb-5">
		<div class="admin-form shadow p-2">
			<form action="logincheck.php" method="POST">
				<div class="form-group">
					<label>Email ID</label>
					<input type="text" name="email" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" name="pass" value="" class="form-control" autocomplete="off" required>
				</div>
				<input type="submit" class="btn btn-success" name="">
				
			</form>
			
		</div>
	</div>
		
	</div>
</header>

</body>
</html>