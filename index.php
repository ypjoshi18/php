<?php
session_start();
if (empty($_SESSION['user'])) {
    header ("Location: views/login.php");
    exit(0);
}

header ("Location: /views/dashboard.php");
