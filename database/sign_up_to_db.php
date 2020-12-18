<?php
    include("constants.php");

    $firstName = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $lastName = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (First_Name, Last_Name, Email, Password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    
    if($conn->query($sql)) 
    {
        session_start();
        
        $_SESSION['first_name'] = $firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['user_type'] = "patient";

        header("location: ../patients/appointments.php");
    } 
    else 
    {
        echo "Sorry. An error occured " + $conn->error;
    }    
?>