<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud2` set 
    id=$id ,name='$name',email='$email', 
    mobile='$mobile',password='$password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"data update scfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>crud </title>
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>name</label>
    <input type="text" 
    class="form-control" 
    placeholder="Enter name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" 
    class="form-control" 
    placeholder="Enter email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="text" 
    class="form-control" 
    placeholder="Enter number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" 
    class="form-control" 
    placeholder="Enter password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
</body>
</html>