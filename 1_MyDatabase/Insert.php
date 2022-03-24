
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "tpcollege");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $ROLL=  $_REQUEST['roll'];
        $NAME = $_REQUEST['name'];
        $F_NAME =  $_REQUEST['fnm'];
        $ADDRESS = $_REQUEST['address'];
        $PHNO = $_REQUEST['phno'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student VALUES ('$ROLL', 
            '$NAME','$F_NAME',' $ADDRESS','$PHNO')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$ROLL\n $NAME\n "
                . "$F_NAME\n $ADDRESS\n $PHNO");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>