<?php
session_start();
$username = $_SESSION['user'];
$conn = mysqli_connect('localhost' , 'root' , '' ,'information');
$rquery = "DELETE FROM users where username ='" .$username. "'";
$res = mysqli_query($conn,$rquery);
?>
<p>Your Data is Succesfully Deleted!!</p>