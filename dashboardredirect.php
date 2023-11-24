<?php
require('includes/config.php'); 


session_start();
if (strlen($_SESSION['alogin']) == 0) {
    header('location: index.php');
    exit;
}

include('./Classes/AdminDashboard.php'); 

$adminDashboard = new AdminDashboard($dbh); 
?>
