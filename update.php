<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php  include 'links.php' ?>
</head>
<style type="text/css">
  .container{ position: relative; width: 80%; margin: 0 auto; padding: 0; }
  .container{
   margin-top: 50px;
   border-radius: 1px;
   height: 100vh;
}

table {
  margin-top: 10px;
  padding: 10px;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color:#EDC7B7}

th {
  background-color: #C38D9E;
  color: white;
}
.btn{
  background-color: #AC3B61;
}

</style>
<body></body>
</html>

<?php
  session_start();
$conn = mysqli_connect('localhost', 'root','','result');
  if(!$conn)
  {
    die ("Error!!");
  }
  echo "<div class='container'>";
  print "<table class='table' > ";
  print " <tr>
            <th>Name</th>
            <th>Principle of Management</th>
            <th>Digital Logic</th>
            <th>Computer Information System</th>
            <th>English</th>
            <th>Business Math</th>
            <th> Edit</th>
            <th>Percentage</th>
            </tr>";



 $idd=$_POST['id'];
    $sql = "SELECT * FROM marks1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
  if($row["ms1"]==$idd){
    echo "<form method='POST' action='updatebackend.php'>
    <input type='hidden'  value='" . $row["ms1"]. "' name='id'>
    <tr>
          <td>".$row['Name']."</td>
          <td><input type='text' value='" . $row["Principles_of_Management"]. "' name='pom'></td>
          <td><input type='text' value='" . $row["Digital_Logic"]. "' name='dl'></td>          
          <td><input type='text' value='" . $row["Computer_Information_System"]. "' name='cis'></td>    
          <td><input type='text' value='" . $row["English"]. "' name='eng'></td>
          <td><input type='text' value='" . $row["Business_Mathematics"]. "' name='bm'></td>
          ";     
    echo "<td><input type=\"submit\"  class=\"btn btn-success\"  value=\"Save\"/>
                 </td>";
          $t=($row['Principles_of_Management']+$row['Digital_Logic']+$row['Computer_Information_System']+$row['English']+$row['Business_Mathematics'])/5;
         echo"
        <td> ".$t." </td> 
        </tr>";
  }
  else{

    echo "<form method='POST' action='update.php'><tr>
        <td>".$row['Name']."</td>
        <td>".$row['Principles_of_Management']."</td>
        <td>".$row['Digital_Logic']."</td>
        <td>".$row['Computer_Information_System']."</td>
        <td>".$row['English']."</td>
        <td>".$row['Business_Mathematics']."</td>
        <td>
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
  echo "</form>";
}
    echo "</table>";    
    echo "</div>";
    echo "</div>";    
  }
  else{
    echo "No record !!";
  }
?>

</body>
</html>
