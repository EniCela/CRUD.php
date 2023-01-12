 <?php
$con=new mysqli('localhost','root','','crudoperationn');

if(!$con){
    // echo"connesct db";
    die(mysqli_error($con));
}


?>