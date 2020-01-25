<?php
session_start();
if (isset($_POST['submit']))
{
    $username = $_SESSION['user'];
    $mobno = $_POST['mobno'];
    $name = $_POST['name'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
       
    $conn = mysqli_connect('localhost' , 'root' , '' ,'information');
    if ($conn) echo ("Connected");
    else die("Failed");
    $uquery = "UPDATE users SET name = '$name' , mobno = '$mobno' , password = '$password' WHERE username = '$username'";
    mysqli_query($conn,$uquery);
    include 'post-update.php';
}
?>