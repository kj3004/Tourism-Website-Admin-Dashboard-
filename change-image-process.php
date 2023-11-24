<?php


session_start();
error_reporting(0);
include('includes/config.php');
include('./Classes/ImageProcessor.php'); 

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $imgid = intval($_GET['imgid']);
    if (isset($_POST['submit'])) {
        $pimage = $_FILES["packageimage"]["name"];
        move_uploaded_file($_FILES["packageimage"]["tmp_name"], "pacakgeimages/" . $_FILES["packageimage"]["name"]);

        $imageProcessor = new ImageProcessor();
        $rowsAffected = $imageProcessor->updatePackageImage($dbh, $imgid, $pimage);

        if ($rowsAffected > 0) {
            $msg = "Package Updated Successfully";
        } else {
            $error = "Failed to Update Package Image";
        }
    }
}
?>
