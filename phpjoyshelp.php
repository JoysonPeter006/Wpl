<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE groc";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","groc");
if($cc->connect_error)
{echo "connection unsuccessful";}
$s="CREATE TABLE grocery2(itemcode INT PRIMARY KEY,itemname VARCHAR(25),itype VARCHAR(25),available VARCHAR(25),expiry DATE";
if($cc->query($s))
    {echo "table created";}
}
$cc->close();
}
?>