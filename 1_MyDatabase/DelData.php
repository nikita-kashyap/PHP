<?php
$con=mysqli_connect("localhost","root","","tpcollege");
if($con)
{
	$name=$_GET['nm'];
	$roll=$_GET['roll'];
	$qstr="DELETE FROM STUDENT WHERE ROLL=".$roll." AND NAME='".$name."'";
		echo $qstr."<br>";
			if(mysqli_query($con,$qstr))
			{
				echo "<br>EXECUTED SUCCESSFULLY.";
			}
			else
			{    
			echo "<br>QUERY NOT EXECUTED.";
			}
}
else
{
	echo "<h1>NOT CONNECTED</h1>";
}
?>