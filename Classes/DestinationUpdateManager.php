<?php

include('includes/config.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DestinationUpdateManager
 *
 * @author Kavindu
 */
class DestinationUpdateManager {

    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function getDestinationDetails($pid) {
        $sql = "SELECT * FROM destination WHERE destination_id  = :pid";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function updateDestinationDetails($pid, $pname, $ptype, $plocation, $sdescription, $pdetails) {
        $sql = "UPDATE destination SET name = :pname, category = :ptype, city = :plocation, description = :sdescription, description_full = :pdetails WHERE destination_id = :pid";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_INT);
        $query->bindParam(':pname', $pname, PDO::PARAM_STR);
        $query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
        $query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
        $query->bindParam(':sdescription', $sdescription, PDO::PARAM_STR);
        $query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
        return $query->execute();
    }

}

?>
