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
    if(!empty($_POST['uid']) ) {

        $id = $_POST['uid'];

        $sql = "Select * from users where uid='$id' ";
$result = $conn->query($sql);

if($result->num_rows > 0){

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8' />
    <title>Login Page</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous' />

    <link rel='preconnect' href='https://fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap' rel='stylesheet' />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous' referrerpolicy='no-referrer'
    />
    <link rel='stylesheet' href='css/style.css' />
</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- Nav Bar -->

    <div class='container-fluid' style='padding: 3% 15%''>
        <nav class='navbar navbar-expand-lg navbar-dark' style='padding-bottom: 4.5rem'>
            <img src='images/logo.png' alt='' style='width:150px;height:150px;'>
            <a class='navbar-brand' style='user-select: none; font-size: 2.5rem'>SpringTime</a>

            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav1' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>

            <div class='collapse navbar-collapse' id='navbarNav1'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link titleEntries' href='index.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link titleEntries' href='#testimonials'>Courts</a>
                    </li>
                    <li class='av-item'>
                        <a class='nav-link titleEntries' href='register.php'>Registration</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link titleEntries active' href='signin.php'>Signin</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link titleEntries' href='showDetails.php'>Members</a>
                    </li>
                </ul>
            </div>
        </nav>

    <form action='update.php' method='POST' >
    <div class='box-form' style='margin-top: 2%''>
        <div class='right'>
            <b><h1 style='margin-top: 5%'>Details</h1></b>
        <div class='inputs'>";

        while($row = $result->fetch_assoc()){
            echo"
          <input type='text' value=".$row["uid"]." id='uid' name='uid' />
          <br />
          <input type='text'  value=".$row["uname"]." id='uname' name='uname' />
          <br />
          <input type='number' value=".$row["age"]." id='age' name='age' />
          <br />
          <input
            id='phone'
            name='phone'
            value=".$row["phone"]."
            name='phone'
          />
          <br />

          <input type='text' value=".$row["gender"]." id='gender' name='gender' />
        </div>

        <br />

        <br />
        <input
          type='submit'
          id='submit'
          class='submit'
          value='Update'
          name='update'/>
          <input
          type='submit'
          id='submit'
          class='submit'
          value='Delete'
          name='delete'/>
      </div>
    </div>
  </form>
    <!-- partial -->
  </body>

</html>";
}}}}
?>