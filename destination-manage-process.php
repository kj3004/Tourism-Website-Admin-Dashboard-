<?php


session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/DestinationManager.php'); 

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $destinationManager = new DestinationManager($dbh); 

    $tourPackages = $destinationManager->getAllTourDestination(); 

    

}
