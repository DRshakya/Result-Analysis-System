<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:student.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
</head>
<body>
	<div class="container center-div shadow">
	<div class="heading mb-5 text-center text-uppercase text-white">WELCOME TO ADMIN MAIN PAGE
	</div>

	<a href="logout.php" class="btn btn-danger">Logout</a>
		</div>

</body>
</html>