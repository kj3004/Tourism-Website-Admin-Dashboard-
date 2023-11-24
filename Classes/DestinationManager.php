<?php
include('includes/config.php'); 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DestinationManager
 *
 * @author Kavindu
 */
class DestinationManager {
  private $dbh; 

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function getAllTourDestination() {
        $sql = "SELECT * FROM destination";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
}
