<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>About Us</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            <?php if(!isset($_SESSION['user_type'])) { ?>
            <a class="navbar-brand" href="index.php">HyperDia & Pregnant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="partners.php">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patients.php">Are you a patient?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                </ul>
            </div>
            <?php } else { ?>
            <a class="navbar-brand" href="">HyperDia & Pregnant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="patients/appointments.php">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patients/prescriptions.php">Prescription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="database/log_out.php">Log Out</a>
                    </li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </nav>

    <div class="header-section-2">
        <div class="overlay">
            <div class="header-content">
                <h4>WHO WE ARE</h4>
                <p>
                HyperDia & Pregnant exists for one reason. Better pregnancies for hypertensive and Diabetic expectant women
                </p>
                <br>
                <br>
                <br>
                <h4>Our Mission</h4>       
                <p class="mt-3">
                To improve hypertensive and diabetic pregnancy outcome through reminding our patients when to attend prenatal care appointments and their medicine prescriptions. We understand the challenges facing vulnerable mothers and their babies in our society.
                </p>
            </div>
        </div>
    </div>

    <div class="body-section mt-3 mb-3">
        <div class="container">    
            <h4 class="text-center">
                Partners
            </h4>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">MDs</h5>
                            <p class="card-text">Maryann & Daughters is a philanthropic firm dedicated to helping others. </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Hospital</h5>
                            <p class="card-text">We have also partnered with Hospital who have lent their aid in research and staffing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">M&M</h5>
                            <p class="card-text">
                                MM & LISSA ventures is an NGO. They have dedicated their efforts to financing our efforts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>