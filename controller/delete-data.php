<?php
session_start();
$userid = $_GET['u'];
$conn = mysqli_connect('localhost' , 'root' , '' ,'information');
$rquery = "DELETE FROM users where id ='" .$userid. "'";
$res = mysqli_query($conn,$rquery);
if ($res) header("location: /views/delete-page.php")
?>

