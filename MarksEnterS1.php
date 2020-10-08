<?php
//session_start();

	$n = $_POST['name'];
   // $roll = $_POST['rollid'];
   $pom = $_POST['pom'];
   $dl = $_POST['dl'];
   $cis = $_POST['cis'];
   $eng = $_POST['eng'];
   $bm = $_POST['bm'];
$con = mysqli_connect('localhost', 'root','', 'result');
if(!$con)
	die("ERROR!!!");

	if(isset($_POST['Submit'])){

   $sql ="INSERT INTO marks1(Name ,Principles_of_Management,Digital_Logic,Computer_Information_System,English,Business_Mathematics)
   		VALUES('$n', '$pom', '$dl', '$cis', '$eng', '$bm') ";

   	if(mysqli_query($con,$sql))
   	{
   		// echo"<script type='text/Javascript'>
					// 	alert('Marks Inserted Successfully!!');
					// </script>";
					// include "ViewS1.php";
					header('location:ViewS1.php');
   	}
   	else{
   		echo "Error!".mysqli_error($con);
   	}

   }

?>