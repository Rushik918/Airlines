<?php
session_start();
include("./connection.php");


if (isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}
else{
    $user = 1;
}
$flight = $_REQUEST['flight'];
$type = $_REQUEST['type'];

$query = "INSERT INTO `booking`( `flight_id`, `user_id`, `type`) VALUES ($flight,$user,$type)";
var_dump($query);
die();
$q = mysqli_query($conn,$query);
$x=mysqli_affected_rows($conn);
// if($x==1)
// {
//     echo "<script>alert('Your Booking was successfull !!!');</script>";
//     echo"<script>location.href='index.php'</script>";
// }
// else
// {
//     echo "<script>alert('Something went wrong !!!');</script>";
//     echo"<script>location.href='index.php'</script>";
// }	

?>
