<?php
session_start();
if (isset($_POST['submit']))
{
    $userid = $_POST['userid'];
    $mobno = $_POST['mobno'];
    $name = $_POST['name'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost' , 'root' , '' ,'information');
    if (!$conn) die("Failed");
    $uquery = "UPDATE users SET name = '$name' , mobno = '$mobno' , password = '$password' WHERE id = '$userid'";
    $res = mysqli_query($conn,$uquery);
    mysqli_close($conn);
    if($res) header("location: /views/post-update.php");
}
?>