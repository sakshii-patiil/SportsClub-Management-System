<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'sports_club';

// Server is localhost with
// port number 3306
$servername = 'localhost:3308';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM membership ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>SpringTime Sports-Club</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        
function open(){
windows.location.href="bookSlot.php";
}
    </script>
</head>

<body style="font-family: 'Montserrat'">
    <section id="title">
        <!-- Nav Bar -->

        <div class="container-fluid" style="padding: 3% 15%">
            <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom: 4.5rem">
                <a class="navbar-brand" style="user-select: none; font-size: 2.5rem">SpringTime</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.2rem" href="displaySport.php">Courts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.2rem" href="#pricing"> Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.2rem" href="register.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.2rem" href="signin.php">Signin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.2rem" href="showDetails.php">Members</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Title -->
            <div class="row title">
                <div class="col-lg-6">
                    <div class="row">
                        <h1 style="
                  user-select: none;
                  font-family: 'Montserrat-Black', sans-serif;
                  font-size: 3.4rem;
                  font-weight: bold;
                  color: #ffffff;
                ">
                            Enjoy your sport today with exotic services.
                        </h1>
                    </div>
                    <div class="row">
                        <div>
                            <button type="button" class="btn btn-secondary google">
                                <a href="bookSlot.php" style="color:white">Be a member</a>
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <img src="images/sports.png" class="title-img" alt="iphone-mockup" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->

    <section id="features">
        <div class="row container-fluid" style="padding: 7% 12%">
            <div class="col-lg-4 features-block" style="padding: 0 50px 0 50px">
                <i class="icon fa-solid fa-circle-check fa-4x"></i>
                <h3>Latest Equipments</h3>
            </div>
            <div class="col-lg-4 features-block" style="padding: 0 50px 0 50px">
                <i class="fa-solid fa-bullseye fa-4x icon"></i>
                <h3>Well Maintained</h3>
            </div>
            <div class="col-lg-4 features-block" style="padding: 0 50px 0 50px">
                <i class="fa-solid fa-heart fa-4x icon"></i>
                <h3>Helping staff</h3>
            </div>
        </div>
    </section>

    <!-- Testimonials -->

    <section id="testimonials">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval=3000>
            <div class="carousel-inner">
                <div class="carousel-item item1 active">
                    <div>
                        <img src="images/turf1.jpg"  style="width:80%;height:50%" />
                    </div>

                </div>
                <div class="carousel-item item2">

                    <img class="testimonial-image" src="images/turf2.jpg" style="width:80%;height:20%" alt="lady-profile">         </div>

                <!-- <div class="carousel-item item3">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div> -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




    </section>

    <!-- Pricing -->

    <section id="pricing">
        <h2>Membership</h2>
        <p>Simple and affordable price plans for you.</p>
        <div class="row">


            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
            ?>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <div class="card col-md-6 col-lg-4" style="width:30%;">
                <div class="card-header">
                    <h3>
                        <?php echo $rows['mtype']; ?>
                    </h3>
                </div>
                <div class="card-body">

                    <h2>
                       Price:  <?php echo $rows['fees']; ?>
                    </h2>
                    
                </div>
            </div>

            <td></td>
            <td></td>
            <!-- <td>
                <?php echo $rows['fees']; ?>
            </td> -->

            <?php
            }
            ?>
        </div>
    </section>


    <!-- Call to Action -->

    <section id="cta" style="background-color:#4d1fd6">
        <h3>Experience the true sport.</h3>
        <!-- <div>
            <button type="button" class="btn btn-dark google">
                <em class="fa-brands fa-apple" style="margin-right:2%;"></em>
                Download
            </button>
            <button type="button" class="btn btn-light apple">
                <em class="fa-brands fa-google-play" style="margin-right:2%;"></em>
                Download
            </button>
        </div> -->
    </section>

    <footer id="footer">
        <i class="fa-brands fa-twitter icons"></i>
        <i class="fa-brands fa-facebook-f icons"></i>
        <i class="fa-brands fa-instagram icons"></i>
        <i class="fa-solid fa-envelope icons"></i>
        <p>© Copyright SpringTime</p>
    </footer>

</body>

</html>