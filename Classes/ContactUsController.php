<?php
session_start();
error_reporting(0);
include('includes/config.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactUsController
 *
 * @author Kavindu
 */
class ContactUsController {
    //put your code here
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function markEnquiryAsRead($eid) {
        $status = 1;
        $sql = "UPDATE tblenquiry SET Status=:status WHERE id=:eid";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':eid', $eid, PDO::PARAM_INT);
        return $query->execute();
    }

    public function getEnquiries() {
        $sql = "SELECT * FROM contact_us";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
?>
