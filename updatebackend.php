<?php

 $conn = mysqli_connect("localhost", "root", "", "result");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


 $id=$_POST['id'];
 $pom = $_POST['pom'];
 $cis = $_POST['cis'];
 $dl = $_POST['dl'];
 $eng = $_POST['eng'];
 $bm = $_POST['bm'];

 $q = " UPDATE marks1 SET  Principles_of_Management='$pom' , Computer_Information_System='$cis', English='$eng', Digital_Logic='$dl', Business_Mathematics='$bm' WHERE ms1='$id'  ";

 if($conn->query($q)) {header('location:ViewS1.php');}
 else echo "Error!".mysqli_error($conn);


?>