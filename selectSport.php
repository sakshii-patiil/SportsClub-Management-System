

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/style.css" />
    <title>Membership</title>
</head>

<body>

    <section id="title">
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
                        <a class="nav-link titleEntries" href="bookSlot.php">Membership</a>
                    </li>
                </ul>
            </div>
        </nav>




            <form action="update.php" method="POST" >
                        <div class="box-form" style="margin-top: 2%">
                <div class="right">
                    <b><h1 style="margin-top: 5%; color:black;">Book</h1></b>

                    <div class="inputs">
                        <input type="number" placeholder="user id" id="uid" name="uid" />
                        <br />
                        <input type="text" placeholder="user name" id="uname" />
                        <br />

                        <input type="tel" id="phone" name="phone" placeholder="phone no." />
                        <br />
                        <br/>
                        <span for="mtype" style="width: 200px;color: #b0b3b9"> Sport name</span>
                        <input type="text" placeholder="eg- Cricket / Tennis /etc" id="uid" name="sport" style="margin-top:-2px" />
                        <br />
                        <span style="width: 200px; margin-top:20px; color: #b0b3b9 " style="margin-top:-2px">Date</span>
                        <input type="date" style="width: 300px; margin-left:20px; " id="birthday " name="birthday ">
                    </div>

                    <br />
                    
                    <input
          type="submit"
          id="submit"
          class="submit"
          value="Book"
          name="bookSlot"/>
                </div>
            </div>
            </form>

</body>

</html>