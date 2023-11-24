<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        include('./Classes/Destination.php');
        $destination = new Destination($dbh);

        $msg = $destination->createDestination($_POST);

        if (strpos($msg, 'ERROR') !== false) {
            $error = $msg;
        } else {
            $msg = $msg;
        }
    }
}
?>
