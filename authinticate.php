<?php


session_start();
include('includes/config.php'); 


include('./Classes/Authentication.php'); 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $auth = new Authentication($dbh); 

    if ($auth->authenticate($username, $password)) {
        $_SESSION['alogin'] = $username;
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>