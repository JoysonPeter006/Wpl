<?php
$cc = new mysqli("localhost", "root", "","Bill");
if ($cc->connect_error) {
    die("Connection failed: " . $cc->connect_error);
}
$sl = "CREATE TABLE bill(id INT(2)  PRIMARY KEY, itemname VARCHAR(30) NOT NULL,itemtype varchar(30),quantity INT(2),price DECIMAL(5,2))";

if ($cc->query($sl) == TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $cc->error;
}

$cc->close();
?>
