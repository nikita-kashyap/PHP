<?php
$con=mysqli_connect("localhost","root","","tpcollege");
if($con)
{
	echo "<h1>CONNECTED"."<br>";

	//mysqli_select_db("tpcollege",$con	) use for selectr multiple database
	
		/* $qstr="insert into student values(
		".$_GET["roll"].",
		".$_GET['nm'].",
		".$_GET['fnm'].",
		".$_GET['address'].",
		".$_GET['phno']."
		)"; */
		 $ROLL=  $_REQUEST['roll'];
        $NAME = $_REQUEST['name'];
        $F_NAME =  $_REQUEST['fnm'];
        $ADDRESS = $_REQUEST['address'];
        $PHNO = $_REQUEST['phno'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student VALUES ('$ROLL', 
            '$NAME','$F_NAME',' $ADDRESS','$PHNO')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$ROLL\n $NAME\n "
                . "$F_NAME\n $ADDRESS\n $PHNO");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
}
else
{
	echo "<h1>NOT CONNECTED";
}
?>