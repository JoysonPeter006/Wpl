<?php
$cc=new mysqli("localhost","root","","bill");
if($cc->connect_error){
	die("Connection failed:".$cc->connect_error);
}
$sum=0;
$sql="SELECT * FROM bill";
$result=$cc->query($sql);
if ($result->num_rows>0){
	echo "<table border='1'<tr>
	<td>id</td>
	<td>items</td>
	<td>price</td>
	</tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr>
		<td>".$row["id"]."</td><td>".$row["items"]."</td><td>".$row["price"]."</td></tr><br>";
		$sum += $row['price'];
		
	}
	echo "<tr><td colspan=2>total</td><td>".$sum."</td></tr>";
	echo "</table>";
}else{
	echo "0 results";
}
$cc->close();
?>