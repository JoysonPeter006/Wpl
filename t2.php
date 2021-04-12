<?php
$cc = new mysqli("localhost", "root", "","bill");
if ($cc->connect_error) {
    die("Connection failed: " . $cc->connect_error);
}
$sl = "CREATE TABLE bill(id INT(2)  PRIMARY KEY, items VARCHAR(30) NOT NULL,price DECIMAL(5,2))";

if ($cc->query($sl) == TRUE) {
    echo "Table bill created successfully";
} else {
    echo "Error creating table: " . $cc->error;
}

$cc->close();
?>
