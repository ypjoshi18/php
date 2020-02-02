<?php
    $conn = mysqli_connect('localhost' , 'root' , '' ,'information');
    if (!$conn) die("Failed");
    $rquery = "SELECT username , id FROM users";
    $res = mysqli_query($conn,$rquery);
    if ($res) {
    $_SESSION['num_of_rows'] = mysqli_num_rows($res);
    $userArray = [];
    while ($row = mysqli_fetch_assoc($res))
        {
            $userArray[] = [$row["username"], $row['id']];
        }
//    print_r($userArray);
//    $_SESSION['array'] = $userArray;
    }
?>