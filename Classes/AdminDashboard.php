<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminDashboard
 *
 * @author Kavindu
 */
class AdminDashboard {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function getTotalDrivers() {
        $sql = "SELECT driver_id  from driver";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }
    public function getTotalGuides() {
        $sql = "SELECT guide_id  from guide";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }
    public function getTotalTourists() {
        $sql = "SELECT email from tourist";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }

    public function getTotalTours() {
        $sql = "SELECT tour_id from tour";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }

    public function getTotalDestinations() {
        $sql = "SELECT destination_id from tourist_destination";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }
}
