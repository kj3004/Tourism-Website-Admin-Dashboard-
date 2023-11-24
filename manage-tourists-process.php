<?php

session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/TouristsController.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $touristsController = new TouristsController();
    
    $touristsData = $touristsController->getTouristsData($dbh);
}
?>
