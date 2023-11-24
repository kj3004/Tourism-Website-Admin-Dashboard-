<?php


session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/EmailUpdateManager.php'); 

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $eid = intval($_GET['eid']);
    $emailUpdateManager = new EmailUpdateManager($dbh); 

    if (isset($_POST['submit'])) {
        
        $rname = $_POST['name'];
        $remail = $_POST['email'];
        $rsubject = $_POST['subject'];
        $rreply = $_POST['reply'];

        

    }
    $emailDetails = $emailUpdateManager->getEmailDetails($eid);
    
}
?>

