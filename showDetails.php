<?php

	$servername="localhost:3308";
$username="root";
$password="";
$dbname="sports_club";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}

		$sql = "Select * from users";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table style='border:1px solid black;width :70%'>";
	echo "<tr style='border:1px solid black'>
    <th style='border:1px solid black'>Aadhar number</th>
    <th style='border:1px solid black'>Name</th>
    <th style='border:1px solid black'>Age</th>
    <th style='border:1px solid black'>Gender</th>
    <th style='border:1px solid black'>Contact</th>
    <th style='border:1px solid black'>Update</th>
    <th style='border:1px solid black'>Delete</th>

  </tr>";

	while($row = $result->fetch_assoc()){
		echo " <tr style='border:1px solid black'><td style='border:1px solid black'> ".$row["uid"]."</td><td style='border:1px solid black'>". $row["uname"]."</td><td style='border:1px solid black'>".$row["age"]."</td><td style='border:1px solid black'>".$row["gender"]."</td><td style='border:1px solid black'>".$row["phone"]." </td><td style='border:1px solid black'> <button >Update</button></td><td style='border:1px solid black'> <button>Delete</button></td></tr>";
	}
	echo"</table>";
}else{
	echo "0 results";
}

$conn->close();

?>