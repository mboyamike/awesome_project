<?php
    $password = "iamadoctor";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo $hashedPassword;
?>