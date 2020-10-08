<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
	<style>
		table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
}

	th, td {
  padding: 15px;
  text-align: left;
}
</style>
</head>
<body>
	<header>
	<div class="container center-div shadow">
	<div class="heading mb-5 text-center text-uppercase text-white">List Of Students</div>
	<div class="container  d-flex flex-row justify-content-center mb-5" style="height: 80%;">
		<div class="admin-form shadow p-5" style="height: 100%; width: 80%;">
			<table style="width: 100%;">
			   <tr><th>Roll_No</th>
			   <th>Name</th>
			   <th>Phone</th>
			   <th>Batch</th>
		</tr>

		<?php
			session_start();

			$con = mysqli_connect('localhost', 'root','','result');
			if(!$con)
				die("ERROR!!!");

				$sql = "SELECT *FROM student";
				$res = mysqli_query($con, $sql);
				if(mysqli_num_rows($res)>0)
				{
					while ($row=mysqli_fetch_assoc($res)) {
					echo "<tr><td>".$row["s_roll"]."</td><td>"
					.$row["s_name"]."</td><td>"
					.$row["s_phone"]."</td><td>"
					.$row["s_batch"]."</td></tr>";
	}
}

else{
	echo "No record Found";
}
	mysqli_close($con);

?>

</table>
</div></div></div>
</header>
</body>
</html>


	

