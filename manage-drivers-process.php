<?php

session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/DriverController.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $driverController = new DriverController();

    $driversData = $driverController->getDriversData($dbh);
    
}
?>


