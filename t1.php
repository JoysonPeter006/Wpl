<?php
$cc = new mysqli("localhost","root","");
if($cc->connect_error) {
    die("Connection failed:".$cc->connect_error);
} 
$s = "CREATE DATABASE Bill";
if ($cc->query($s) == TRUE) 
{
    echo "Database created successfully";
} else 
{
    echo "Error creating database: " .$cc->error;
}
$cc->close();
?>
