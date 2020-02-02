<?php
$check = $_GET['u'];
$conn = mysqli_connect('localhost' , 'root' , '' ,'information');
if (!$conn) die("Failed");
$readquery = "SELECT * FROM users where id ='" .$check. "'";
$res = mysqli_query($conn , $readquery);
while ($row = mysqli_fetch_assoc($res))
    {
        $user = $row["username"];
        $name = $row["name"];
        $mob = $row["mobno"]; 
        $pass = $row['password'];
    }
mysqli_close($conn);
