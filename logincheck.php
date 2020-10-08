<?php
session_start();

$con = mysqli_connect('localhost', 'root','','result');
if(!$con)
	die("ERROR!!!");


//$db = mysqli_select_db($con, 'result');

// if(isset($_POST['submit']))
// 	$a = $_POST['email'];
// 	$password = $_POST['pass'];

// 	$sql = "SELECT email,pass FROM admintable WHERE email='$a' and pass='$password'";
// 	// $query = mysqli_query($con,$sql);

// 	if(mysqli_query($con, $sql))
// 	{
		
// 		if($a=="admin" && $password=="admin")
// 		{
// 				$_SESSION['admin']=$a;
// 		 	header('location:adminmainpage.php');
// 		}
// 		else{
// 			echo "login failed";
// 		 	header('location:AdminLogin.php');
// 		}
	
// }
// else{
// 	echo "Error!";
// }

$em=$_POST['email'];
	$pa=$_POST['pass'];
	$sql= " SELECT * FROM student WHERE s_roll='".$em."'
									 AND 
			 						 pass='".$pa."'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['s_roll']=$em;
		header("location:UserView.php");
		exit();
		

	}
	elseif($em=='admin'&&$pa=='admin'){
			header('location:AddResult.php');
		}

		else{
			// echo "login failed";
		 	// header('location:AdminLogin.php');
		 	echo "<html>
			<head>
				<script type='text/Javascript'>
					alert('Invalid Email or Password!!');
				</script>
			</head>";
			
			include('student.php');
	
			echo "</body>
			</html>";
		}
?>