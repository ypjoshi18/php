<?php
session_start();
if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) header ("Location: /views/login.php");
if (isset($_SESSION['user'])) header ("Location: /views/dashboard.php")
?>
