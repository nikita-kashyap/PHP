<html>
<head>
<style>
*{margin:0;}
	body{background-color:seagreen;}
	div{
		background-color:burlywood;
		height:12%; width:100%;}
	#php{padding-top:1.5%;
		 padding-left:1%;
		background-color:seagreen;}
</style>
</head>
<body>
<div><h1 style="text-shadow:2px 2px 5px tomato;padding-top:1%;" align="center">TARUN INDIA INSTITUTE</h1></div>
<div id="php">
<?php

echo "<b>Name:	</b>".$_POST['fname']."&nbsp &nbsp ";
echo $_POST['lname']." <br>";
	if(isset($_FILES['img'])){
		$name=$_FILES['img']['name'];
		$size=$_FILES['img']['size'];
		$type=$_FILES['img']['type'];
		$tmp=$_FILES['img']['tmp_name'];
		echo "<b>File name:</b>".$name."<br><b>File size:</b>".$size."<b><br>File type:</b>".$type;
		move_uploaded_file($tmp,"IMAGES/".$name);
		echo  "<b><br>IMAGE HAS BEEN UPLOADED.  CHECK IT IN IMAGES file folder</b>";
	}else{
		echo "IMAGE HAS NOT BEEN UPLOADED";
	}
		
echo "<br>";
echo "<b>Father's name:</b>	".$_POST['Fname']."<br>"; 
echo "<b>Mother's name:	</b>".$_POST['Mname']."<br>"; 
echo "<b>Email:	</b>".$_POST['email']."<br>"; 
echo "<b>Contact No:	</b>".$_POST['mob']."<br>"; 
echo "<b>Birthday:	</b>".$_POST['birthday']."<br>"; 
echo "<b>Age:	</b>".$_POST['age']."<br>";
echo "<b>Gender:	</b>".$_POST['gender']."<br>";
echo "<b>University:	</b>".$_POST['university']."<br>";
echo "<b>College name:</b>	".$_POST['cnm']."<br>";
echo "<b>Department:	</b>".$_POST['dep']."<br>";
echo "<b>State:	</b>".$_POST['state']."<br>";
echo "<b>Distict:	</b>".$_POST['city']."<br>";
echo "<b>Village:	</b>".$_POST['village']."<br>";
echo "<b>Police_Station:	</b>".$_POST['po']."<br>";
?>
</div>
</body>
</html>