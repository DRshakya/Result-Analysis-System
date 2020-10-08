<?php
session_start();
$roll = $_SESSION['s_roll'];
$con = mysqli_connect('localhost', 'root','','result');
$sql = "SELECT s_name , s_roll , s_batch FROM student WHERE s_roll= '$roll' ";
$sql1 = "SELECT Principles_of_Management, Digital_Logic, Computer_Information_System, English, Business_Mathematics FROM marks1 WHERE s_roll= '$roll' ";
$res = mysqli_query($con, $sql);
$rest = mysqli_query($con, $sql1);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
 		<h2 class="title" align="center">Result Management System</h2>
<?php
	while($row= mysqli_fetch_assoc($res)) {
?>
<p><b>Student Name :</b><?php echo $row['s_name']; ?></p>
<p><b>Student Roll Id :</b><?php echo $row['s_roll']; ?></p>
<p><b>Student Batch:</b><?php echo $row['s_batch']; ?></p>
<?php }  
?>
     <table border="1px" align="center" style="width: 80%; line-height: 30px;">
                              <tr style="text-align: center">
                              	<th colspan="3"><h2> Board Exam Result</h2></th></tr>

                              <tr style="text-align: center">
                                  <th style="text-align: center">S.N</th>
                                  <th style="text-align: center"> Subject</th>    
                                  <th style="text-align: center">Marks</th>
                               </tr>
            <?php
				while($rows= mysqli_fetch_assoc($rest)) {
			?>
                               <tr style="text-align: center">
                                  <td>1</td>
                                  <td>Principles of Management</td>
                                  <td><?php echo $rows['Principles_of_Management']; ?></td>
                               </tr>
                               <tr style="text-align: center">
                                  <td>2</td>
                                  <td>Digital Logic</td>
                                  <td><?php echo $rows['Digital_Logic']; ?></td>
                               </tr>
                               <tr style="text-align: center">
                                  <td>3</td>
                                  <td>Computer Information System</td>
                                  <td><?php echo $rows['Computer_Information_System']; ?></td>
                              </tr>
                               </tr>
                               <tr style="text-align: center">
                                  <td>4</td>
                                  <td>English</td>
                                  <td><?php echo $rows['English']; ?></td>
                               </tr>
                               <tr style="text-align: center">
                                  <td>5</td>
                                  <td>Business Mathematics</td>
                                  <td><?php echo $rows['Business_Mathematics']; ?></td>
                               </tr>
               				<tr style="text-align: center">
                                  <td colspan="2">Total Marks</td>
                                  <td>
                                  <?php
                                 echo  $total=$rows['Principles_of_Management']+$rows['Digital_Logic']+$rows['Computer_Information_System']+$rows['English']+$rows['Business_Mathematics']; ?>
                                  </td>
                                  
                               </tr>

                            <tr style="text-align: center">
                                  <td colspan="2">Total Percentage</td>
                                  <td>
                                  <?php
                                	 echo  $total=($rows['Principles_of_Management']+$rows['Digital_Logic']+$rows['Computer_Information_System']+$rows['English']+$rows['Business_Mathematics'])/5; ?>
                                  </td>
                                  
                               </tr>

                             <tr style="text-align: center">
                                  <td colspan="2">GPA</td>
                                  <td>
                                  <?php
                                	 // echo  $total=($rows['Principles_of_Management']+$rows['Digital_Logic']+$rows['Computer_Information_System']+$rows['English']+$rows['Business_Mathematics'])/5;
                                	 if($total>90 && $total <=100)
                                	 {
                                	 	echo 4.0 ;
                                	 }
                                	 elseif ($total >80 && $total <90) {
                                	 	echo 3.6 ;
                                	 }
                                	 elseif ($total >70 && $total <80) {
                                	 	echo 3.2 ;
                                	 }
                                	 elseif ($total >60 && $total <70) {
                                	 	echo 2.8 ;
                                	 }
                                	 elseif ($total >50 && $total <60) {
                                	 	echo 2.4 ;
                                	 }
                                	 elseif ($total >40 && $total <50) {
                                	 	echo 2.0 ;
                                	 }
                                	 else
                                	 {
                                	 	echo 1.6 ;
                                	 }

                                	  ?>
                                  </td>
                               </tr>

                      <?php
                	}
               			?>

</table>
</body>
</html>