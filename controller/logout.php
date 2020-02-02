<?php
include __DIR__.'/../includes/session.php';
session_start();
unset($_SESSION);
session_destroy();
$_SESSION['message'] = 'Logged out successfully';
header('location:/');
?>