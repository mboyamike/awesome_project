<?php
    include("constants.php");

    $medicine = mysqli_real_escape_string($conn, $_POST['medicine_name']);
    $medicine_type = mysqli_real_escape_string($conn, $_POST['medicine_type']);
    $dose = mysqli_real_escape_string($conn, $_POST['dose']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    

    $sql = "INSERT INTO medication(Medicine_Name, Medicine_Type, Description, Emaip) VALUES ('$medicine', '$medicine_type', '$dose', '$email')";
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