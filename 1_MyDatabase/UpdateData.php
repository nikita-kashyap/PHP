
<?php
$con=mysqli_connect("localhost","root","","tpcollege");
if($con)
{
	$qstr="update student set name='" . $_GET['nm'] ."', f_name='".$_GET['fnm'] . "', address='" .$_GET['address'] ."',phno='".$_GET['phno'] ."' where roll=". $_GET['roll']."";
	echo $qstr;
	echo "<br>";
	
		if(mysqli_query($con,$qstr))
			{
				echo "<BR>DATA UPDATED";
			}
			else
			{    
				echo "<br>DATA NOT UPDATED";
			}
}
else
{
	echo "<h1>NOT CONNECTED";
}
?>