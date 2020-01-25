<?php
session_start();
if (isset($_POST['submit']))
{
    $username = $_POST['email'];
    $_SESSION['user'] = $username;
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost' , 'root' , '' ,'information');
    $rquery = "SELECT * FROM users where username ='" .$username. "'";
    $res = mysqli_query($conn,$rquery);
    while ($row = mysqli_fetch_assoc($res))
    {
        $ruser = $row["username"];
        $rpass = $row["password"];       
    }
    if ($username == $ruser && $password == $rpass) header("Location: /views/dashboard.php");
    else
    {
        header("location:login.php");
        echo 'Invalid Username / Password';
        exit();
    }
}
?>