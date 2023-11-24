<?php

session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/GuideController.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $guideController = new GuideController();

    $guidesData = $guideController->getGuidesData($dbh);
}
?>


