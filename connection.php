<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="MyN3wP4ssw0rd";
    $dbname="student_db";
    $conn = new mysqli ($servername, $username, $password, $dbname);
    if(!$conn){
        echo("Could not connect to db");
    }
    else{
        echo("Connected to database");
    }
    ?>
</body>
</html>