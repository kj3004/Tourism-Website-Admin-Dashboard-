<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/DriverController.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['remove_action']) && $_POST['remove_action'] == 'remove') {
        $driverIdToRemove = $_POST['driverid'];

        // Instantiate DriverController
        $driverController = new DriverController();

        // Check if the driver exists
        $driverDetails = $driverController->getDriverDetailsfromID($dbh, $driverIdToRemove);
        if ($driverDetails) {
        // Remove the driver from the database
        $sql = "DELETE FROM driver WHERE driver_id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$driverIdToRemove]);

        $_SESSION['msg'] = "Driver removed successfully!";
    } else {
        $_SESSION['error'] = "Driver not found!";
    }

    header('location:manage-drivers.php');
} else {
    header('location:manage-drivers.php'); // Redirect if the form is not submitted properly
}
}
?>
