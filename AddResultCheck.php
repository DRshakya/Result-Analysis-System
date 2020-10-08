<?php
session_start();

$con = mysqli_connect('localhost', 'root','','result');
if(!$con)
	die("ERROR!!!");


//$db = mysqli_select_db($con, 'result');

// if(isset($_POST['submit']))
	$etype = $_POST['exam'];
	$sem = $_POST['sem'];

	$sql = "SELECT sem_id FROM Board WHERE sem_id='$sem'";
	// $query = mysqli_query($con,$sql);

	if(mysqli_query($con, $sql))
	{
		
		if($etype=="board" && $sem=="1st")
		{
				// $_SESSION['admin']=$a;
		 	header('location:Sem1.php');

		}
		elseif ($etype=="board" && $sem=="2nd") {
			header('location:sem2.php');
		}
		else{
			echo "login failed";
		 	header('location:AddResult.php');
		}
	
}
else{
	echo "Error!";
}

?>

