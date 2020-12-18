<?php 
    session_start();
    if(!isset($_SESSION['user_type'])) { header("location: ../sign_in.php"); } 
    include("../database/constants.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Appointments</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            <a class="navbar-brand" href="">HyperDia & Pregnant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="appointments.php">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prescriptions.php">Prescription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../database/log_out.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="body-section" style="height: 85vh;">
        <div class="container">
            <h2 class="text-center">Appointments</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                        <th scope="col">Department Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $email = $_SESSION['email'];
                        $sql = "SELECT * FROM appointments WHERE Email = '$email'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $myDate = strtotime($row['Scheduled_Time']);
                            $myDate = date("Y-m-d h:i a", $myDate);
                    ?>
                    <tr>
                        <td><?php echo $myDate; ?></td>
                        <td><?php echo $row['Location']; ?></td>
                        <td><?php echo $row['Department_Name']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>