<?php

require_once('./Classes/ContactUsController.php');
include('includes/config.php');

session_start();
error_reporting(0);

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
    exit();
}

$contactus = new ContactUsController($dbh);

if (isset($_REQUEST['eid'])) {
    $eid = intval($_GET['eid']);
    $success = $backend->markEnquiryAsRead($eid);
    if ($success) {
        $msg = "Enquiry successfully read";
    } else {
        $error = "Failed to mark enquiry as read";
    }
}

header('Location: contactus');
exit();
?>

