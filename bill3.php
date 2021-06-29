<?php
$cc=new mysqli("localhost","root","","bill");
if($cc->connect_error){
	die("Connection failed:".$cc->connect_error);
}

$sql="INSERT INTO bill(id,items,price)
VALUES(1,'Tea',10),(2,'Chappathi',6),(3,'Coffee',13),(4,'Rice',30)";

if($cc->query($sql)==TRUE){
	echo"New record created successfully";
}
else{
	echo "Error:".$sql."<br>".$cc->error;
}

$cc->close();
?>