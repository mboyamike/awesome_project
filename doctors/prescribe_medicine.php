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
            
        </div>
    </nav>
    <div class="body-section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <h4>Prescribe Medicine</h4>
                    <br>
                    <?php 
                        include("../database/constants.php");
                        $email = $_GET['email'];
                    ?>
                    <br><br>
                    <form action="../database/schedule_appointment.php" method="post" style="width: 28rem;">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="form-group">
                            <label for="medicine_name">Medicine Name</label>
                            <input type="text" name="medicine_name" id="medicine_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="medicine_type">Type</label>
                            <input type="text" name="medicine_type" id="medicine_type" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dose">Dose</label>
                            <input type="text" name="dose" id="dose" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <a href="patients.php" class="btn btn-danger mr-3">Cancel</a>
                            <input type="submit" value="Prescribe" class="btn btn-success">
                        </div>
                    </form>  
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <h4>Current Medication</h4>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Medicine</th>
                                <th>Type</th>
                                <th>Dosage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM medication WHERE Email='$email'";
                                $result = $conn->query($sql);
                                while($row=$result->fetch_assoc()) {
                                    
                            ?>
                            <tr>
                                <td><?php echo $row['Medicine_Name']; ?></td>
                                <td><?php echo $row['Medicine_Type']; ?></td>
                                <td><?php echo $row['Description']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>