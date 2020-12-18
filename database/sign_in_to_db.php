<?php
    include("constants.php");

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    echo $sql;
    if($result->num_rows > 0) 
    {
        // Email correct
        while($row = $result->fetch_assoc()) 
        {
            if(password_verify($password, $row['Password'])) 
            {
                session_start();
                
                $_SESSION['first_name'] = $row['First_Name'];
                $_SESSION['last_name'] = $row['Last_Name'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['user_type'] = $row['User_Type'];

                if($row['User_Type'] == "doctor") 
                {
                    header("location: ../doctors/patients.php");
                } 
                else if($row['User_Type'] == "admin")
                {
                    // Log in as admin
                }
                else 
                {
                    // log in as patient
                    header("location: ../patients/appointments.php");
                }

                
            }
        }
    } 
    else 
    {
        // Error Occured - Invalid Email
    }
?>