<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/GuideController.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
   if (isset($_POST['remove_action']) && $_POST['remove_action'] == 'remove') {
        $guideIdToRemove = $_POST['guideid'];

        // Instantiate DriverController
        $guideController = new GuideController();

        // Check if the driver exists
        $guideDetails = $guideController->getGuideDetailsfromID($dbh, $guideIdToRemove);
        if ($guideDetails) {
        // Remove the driver from the database
        $sql = "DELETE FROM guide WHERE guide_id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$guideIdToRemove]);

        $_SESSION['msg'] = "Guide removed successfully!";
    } else {
        $_SESSION['error'] = "Guide not found!";
    }

    header('location:manage-guides.php');
} else {
    header('location:manage-guides.php'); // Redirect if the form is not submitted properly
}
}
?>
