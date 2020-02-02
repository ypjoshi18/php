<?php
if (isset($_POST['submit']))
{
    $username = $_POST['email'];
    $mobno = $_POST['mobno'];
    $name = $_POST['name'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
       
    $conn = mysqli_connect('localhost' , 'root' , '' ,'information');
    if ($conn) echo ("Connected");
    else die("Failed");
    $wquery = "INSERT INTO users (username,name,mobno,password) VALUES ('$username','$name','$mobno','$password')";
    mysqli_query($conn,$wquery);
    $rquery = "SELECT * FROM users where username ='" .$username. "'";
    $res = mysqli_query($conn,$rquery);
    while ($row = mysqli_fetch_assoc($res))
    {
        echo ($row["username"]);
        echo ($row["name"]);
        echo ($row["mobno"]);     
    }
    mysqli_close($conn);
    header ("location: /views/login.php");
}
?>