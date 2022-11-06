<?php
$servername="localhost:3308";
$username="root";
$password="";
$dbname="sports_club";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
if(isset($_POST['update']))
{
	if(!empty($_POST['uname']) && !empty($_POST['uid']) && !empty($_POST['age']) && !empty($_POST['phone']) && !empty($_POST['gender'])) {

		$name =$_POST['uname'];
		$id = $_POST['uid'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$phone =$_POST['phone'];

		$query = "UPDATE users SET uname = '$name', age= '$age',gender='$gender',phone='$phone'
WHERE uid = '$id';";
		$run=mysqli_query($conn,$query)or die(mysqli_error());
header("Location: index.php");
		

	}
}

if(isset($_POST['delete']))
{
	if(!empty($_POST['uname']) && !empty($_POST['uid']) && !empty($_POST['age']) && !empty($_POST['phone']) && !empty($_POST['gender'])) {

		$name =$_POST['uname'];
		$id = $_POST['uid'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$phone =$_POST['phone'];

		$query = "delete from users WHERE uid = '$id';";
		$run=mysqli_query($conn,$query)or die(mysqli_error());

     header("Location: index.php");
	}
}
if(isset($_POST['submit']))
{
    if(!empty($_POST['uid'])) {

        $id = $_POST['uid'];
        $membership = $_POST['membership'];

        echo '<script>console.log('.$membership.');</script>';

        $query = "UPDATE users SET mtype = '$membership' WHERE uid = '$id';";
        $run=mysqli_query($conn,$query)or die(mysqli_error());
     header("Location: index.php");
     

    }
}
if(isset($_POST['bookSlot']))
{
    if(!empty($_POST['uid'])) {

        $id = $_POST['uid'];
        $sport = $_POST['sport'];
        echo "$sport";

        $sql = "Select sid from sports where sname='$sport';";
	   $result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $temp = $row["sid"];

	   $sql = "Select mtype from users where uid='$id';";
	   $result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $mtype = $row["mtype"];

echo "$temp";
echo "$mtype";
	   $query = "Insert into play VALUES('$id','$temp','$mtype');";
		$run=mysqli_query($conn,$query)or die(mysqli_error());
			header("Location: index.php");
     
   

    }
}
	?>