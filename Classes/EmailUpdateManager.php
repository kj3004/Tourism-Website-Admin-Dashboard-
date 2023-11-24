<?php
include('includes/config.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailUpdateManager
 *
 * @author Kavindu
 */
class EmailUpdateManager {

    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function getEmailDetails($eid) {
        $sql = "SELECT * FROM contact_us WHERE enq_id   = :eid";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':eid', $eid, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }


}

?>
