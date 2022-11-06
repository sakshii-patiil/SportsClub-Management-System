<?php
$servername="localhost:3308";
$username="root";
$password="";
$dbname="sports_club";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
if(isset($_POST['submit']))
{
	if(!empty($_POST['uname']) && !empty($_POST['uid']) && !empty($_POST['age']) && !empty($_POST['phone']) && !empty($_POST['gender'])) {

		$name =$_POST['uname'];
		$id = $_POST['uid'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$phone =$_POST['phone'];

		$query = "Insert into users(uid,uname,age,gender,phone) VALUES('$id','$name','$age','$gender','$phone')";
		$run=mysqli_query($conn,$query)or die(mysqli_error());
			header("Location: index.php");

	}
}
	?>