<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Patients List</title>
</head>
<body style="background-color: #e3e2e2;">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            
            <a class="navbar-brand" href="">HyperDia & Pregnant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="patients.php">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointments.php">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../database/log_out.php">Log Out</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>
    <div class="body-section">
        <div class="container">
            <br>
            <br>
            <br>
            <h4>Patients</h4>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Pregnancy Trimester</th>
                        <th>Medical Condition</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include("../database/constants.php");
                        $sql = "SELECT * FROM user LEFT JOIN patient ON user.Email = patient.Email WHERE User_Type = 'patient'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {                    
                    ?>
                    <tr>
                        <td><?php echo $row['First_Name']." ".$row['Last_Name'];?></td>
                        <td><?php echo $row['Pregnancy_Trimester'];?></td>
                        <td><?php echo $row['Medical_Condition'];?></td>
                        <td><a href="schedule_appointment.php?email=<?php echo $row['Email']; ?>" class="btn btn-primary">Schedule Appointment</a></td>
                        <td><a href="prescribe_medicine.php?email=<?php echo $row['Email']; ?>" class="btn btn-success">Prescribe Medicine</a></td>
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