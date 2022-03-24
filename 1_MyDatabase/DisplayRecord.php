<h1> Student Record </h1>
<style>
.sdata
{
	float:left;
	width:500px;
	border:#000;
	border-style:solid;
	padding:10px;
	margin:10px;
	background:#000;
	color:#FFF;
	font:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
	border-radius:20px;
	}
</style>
<?php
//echo "Testing";
$con=mysqli_connect("localhost","root","","tpcollege");
if($con)
{	
			$qstr="select * from student";
			 
			$res=mysqli_query($con,$qstr);
			 
 
			 while($row = mysqli_fetch_assoc($res) ){
				 ?>
                 <div class="sdata">
      			                
                 <?php 
                  echo "<br>Roll Number : ".$row['ROLL'].'<br>';
				  echo "<br>Student Name : ".$row['NAME'].'<br>';
				  echo "<br>Fathers's Name : ".$row['F_NAME'].'<br>';
				  echo "<br>City : ".$row['ADDRESS'].'<br>';
				  echo "<br>Phno Number : ".$row['PHNO'].'<br>';
				  echo "</div>";
				   
				}
				  
}
else
{
	echo "Not Connected";
}
?>