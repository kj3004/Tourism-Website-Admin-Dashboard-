<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GuideController
 *
 * @author Kavindu
 */
class GuideController {

    public function getGuidesData($dbh) {
        $sql = "SELECT * FROM guide";
        $query = $dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
     public function getGuideDetailsfromID($dbh, $guideID) {
        $sql = "SELECT name FROM guide WHERE guide_id  = ?";
        $query = $dbh->prepare($sql);
        $query->execute([$guideID]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
