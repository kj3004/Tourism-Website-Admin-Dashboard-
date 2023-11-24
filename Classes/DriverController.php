<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DriverController
 *
 * @author Kavindu
 */
class DriverController {

    public function getDriversData($dbh) {
        $sql = "SELECT * FROM driver";
        $query = $dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getDriverDetailsfromID($dbh, $driverID) {
        $sql = "SELECT driver_name FROM driver WHERE driver_id  = ?";
        $query = $dbh->prepare($sql);
        $query->execute([$driverID]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
 

}
