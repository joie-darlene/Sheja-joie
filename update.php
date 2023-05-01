<?php

include 'connection.php';
$id=$_GET['updateid'];
$sql="select * from users where id=$id";
$result =mysqli_query($conn,$sql);
if($result){
    
}

if (isset($_POST['submit'])) {
    $Fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Encrypt the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql ="update users set id=$id,fname='Fname',lname='$Lname',email='$email',password='$password',dender='$gender',password_hash='$hashed_password'";
    $result=mysqli_query($conn,$sql);
    if ($result == true) {
        echo "Record is updated in database";
        // header('location:display.php');
    } else {
        echo "No new record created";
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>signup form</h2>
    <form action="create.php" method="POST">
        <fieldset>
            firstname :<input type="text" name="fname"><br><br>
            lastname :<input type="text" name="lname"><br><br>
            email :<input type="email" name="email"><br><br>
            password :<input type="text" name="password"><br><br>
            Gender: <br>
            <input type="radio"name="gender" valu="male">male
            
            <input type="radio"name="gender" value="female">female
            <br><br>
            
            <input type="submit"name="submit" value="update">

        </fieldset>
    </form>
    
</body>
</html>