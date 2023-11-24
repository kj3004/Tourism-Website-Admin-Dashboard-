<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    include('./Classes/PasswordChange.php');
    
    $passwordChange = new PasswordChange($dbh);

    if (isset($_POST['submit'])) {
        $msg = $passwordChange->changePassword($_SESSION['alogin'], $_POST['password'], $_POST['newpassword']);
        if (strpos($msg, 'ERROR') !== false) {
            $error = $msg;
        } else {
            $msg = $msg;
        }
    }
}
?>
