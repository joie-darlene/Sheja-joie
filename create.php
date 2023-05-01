<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $Fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Encrypt the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Fname, Lname, email, password, gender) values ('$Fname', '$lname', '$email', '$hashed_password', '$gender')";
    $result = $conn->query($sql);

    if ($result == true) {
        // echo "Record is created in database";
        header('location:display.php');
    } else {
        echo "No new record created";
    }
    
    $conn->close();
}
?>