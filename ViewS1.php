<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php  include 'links.php' ?>
</head>
<style type="text/css">

/*.container{
	position: relative; width: 100%; padding: 0;
	margin-top: 50px;
    border-radius: 1px;
    height: 100vh;
}*/
body{
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
	font-size: 2.1vh;
}
.table {

  margin-top: 5px;
  padding-left: 20%;

  width: 100%;
}

th, td {
  text-align: left;
  height: 4vh;
  padding: 5px;
}

tr:nth-child(even){background-color:#EDC7B7}

th {
  background-color: #C38D9E;
  color: white;


}

.btn{
	background-color: #AC3B61;
	outline: none;
	border: 0px transparent;
	color:white;
		padding: 0.7vh;
}
.btn:hover{
	cursor: pointer;

}


</style>
<body>

</body>
</html>

<?php
	session_start();
$con = mysqli_connect('localhost', 'root','','result');
	if(!$con)
	{
		die ("Error!!");
	}

	$sql =" SELECT * FROM marks1";
	$res =mysqli_query($con, $sql);
	// echo "<div class='container'>";
		print "<table class='table' > ";         
		print " <tr >
		        <th >Name</th>
		        <th >Principle of Management</th>
		        <th >Digital Logic</th>
		        <th >Computer Information System</th>
		        <th >English</th>
		        <th >Business Math</th>
		        <th >Edit</th>
		        <th>Percentage</th>
		        </tr>";        
	if(mysqli_num_rows($res)>0)
	{
	 while($row=mysqli_fetch_assoc($res))
	 { 
	 	echo "<tr>
	 		  <td>".$row['Name']."</td>
	 		  <td>".$row['Principles_of_Management']."</td>
	 		  <td>".$row['Digital_Logic']."</td>
	 		  <td>".$row['Computer_Information_System']."</td>
	 		  <td>".$row['English']."</td>
	 		  <td>".$row['Business_Mathematics']."</td>
	 		  <td style='text-align:center;'>
				<form action='update.php' method='POST'>
					<input type='hidden' name='id' value='".$row['ms1']."'>
	 		  		<input type='submit' class='btn btn-info' value='Update'></input>
				</form>
	 		  </td>";
$t=($row['Principles_of_Management']+$row['Digital_Logic']+$row['Computer_Information_System']+$row['English']+$row['Business_Mathematics'])/5;
	 		   echo"
	 		  <td> ".$t." </td>	
	 		  </tr>";
	 }
	 	echo "</table>";
	 	echo "</div>";          
	}

	else{
		echo "No record !!";
	}

?>



