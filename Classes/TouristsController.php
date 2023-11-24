<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TouristsController
 *
 * @author Kavindu
 */
class TouristsController {

    public function getTouristsData($dbh) {
        $sql = "SELECT * FROM tourist";
        $query = $dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
