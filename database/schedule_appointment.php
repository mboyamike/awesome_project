<?php
    include("constants.php");

    $appointment_time = mysqli_real_escape_string($conn, $_POST['appointment_time']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $sql = "INSERT INTO appointments VALUES ('$appointment_time', '$email', '$location', '$department')";
    echo $sql;
    if($conn->query($sql)) 
    {
        header("location: ../doctors/patients.php");
    } 
    else 
    {
        echo $conn->error;
    }
?>