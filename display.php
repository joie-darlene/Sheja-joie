<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud_operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<button class="btn btn-primary my-5"><a href="signup.html" class="text-light">add user</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">gender</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="select * from users";
$result =mysqli_query($conn,$sql);
if($result){
   while( $row =mysqli_fetch_assoc($result)){
    $id =$row['id'];
    $Fname = $row['Fname'];
    $lname = $row['Lname'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$Fname.'</td>
    <td>'.$lname.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>'.$gender.'</td>
    <td>
    <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
    <button class="bg-dark"><a href="delete.php?deleteid='.$id.'" class="text-danger">delete</a></button>
       </td>
  </tr>';
   }
}

    ?>
 
  </tbody>
</table>
    </div>
</body>
</html>