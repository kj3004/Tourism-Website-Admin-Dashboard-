<?php


session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/DestinationUpdateManager.php'); 

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $pid = intval($_GET['pid']);
    $destinationUpdateManager = new DestinationUpdateManager($dbh); 

    if (isset($_POST['submit'])) {
        
        $pname = $_POST['destination_name'];
        $ptype = $_POST['destination_category'];
        $plocation = $_POST['destination_location'];
        $sdescription = $_POST['small_description'];
        $pdetails = $_POST['destinationdetails'];
        $pimage = $_FILES["packageimage"]["name"];
        

        
        $result = $destinationUpdateManager->updateDestinationDetails($pid, $pname, $ptype, $plocation, $sdescription, $pdetails);

        if ($result) {
            $msg = "Package Updated Successfully";
        } else {
            $error = "Error updating package";
        }
    }

    $destinationDetails = $destinationUpdateManager->getDestinationDetails($pid);

    
    
}
?>

