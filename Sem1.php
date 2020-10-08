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

<style type="text/css">
.center-div{
	position: absolute;
	top: 39%;
	left: 42%;
	transform: translate(-40%, -40%);
}
</style>
</head>
<body>
<header>
	<div class="container center-div shadow" style="width: 40%; right: :50%;">
	<div class="heading mb-2 text-center text-uppercase text-white">Enter Marks</div>
	<div class="container  d-flex flex-row justify-content-center mb-6 ">
		<div class="admin-form shadow p-2">
			<form action="MarksEnterS1.php" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="" class="form-control" autocomplete="off" required>
				</div>
				<!-- <div class="form-group">
					<label>Roll Id</label>
					<input type="text" name="rollid" value="" class="form-control" autocomplete="off">
					id="<?php echo $_GET['seller_id']; ?>" value="<?php echo $_GET['seller_id']; ?>"/>
				</div> -->
				<div class="form-group">
					<label>Principle of Management</label>
					<input type="text" name="pom" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Digital Logic</label>
					<input type="text" name="dl" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Computer Information System</label>
					<input type="text" name="cis" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>English</label>
					<input type="text" name="eng" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Business Math</label>
					<input type="text" name="bm" value="" class="form-control" autocomplete="off" required>
				</div>
				<input type="submit" class="btn btn-success" name="Submit">
				<input type="reset" value ="Reset" class="btn btn-success">
				
			</form>
			
		</div>
	</div>
		
	</div>
</header>

</body>
</html>