<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- partial:index.partial.html -->

    <!-- Nav Bar -->

    <div class="container-fluid" style="padding: 3% 15%">
        <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom: 4.5rem">
            <img src="images/logo.png" alt="" style="width:150px;height:150px;">
            <a class="navbar-brand" style="user-select: none; font-size: 2.5rem">SpringTime</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link titleEntries" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleEntries" href="#testimonials">Courts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleEntries" href="register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleEntries active" href="signin.php">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleEntries" href="showDetails.php">Members</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form method="POST" action="getDetails.php">
            <div class="box-form" style="margin-top: 2%">
                <div class="right">
                    <input type="number" placeholder="Enter Aadhar number" id="uid" name="uid" />
                    <input type="submit" name="submit" class="loginBtn" />
                </div>
            </div>
        </form>

        <!-- partial -->
</body>

</html>