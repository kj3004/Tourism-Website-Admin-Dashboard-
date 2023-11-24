<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImageProcessor
 *
 * @author Kavindu
 */
class ImageProcessor {
    
 

    public function updatePackageImage($dbh, $imgid, $pimage) {
        $sql = "UPDATE TblTourPackages SET PackageImage=:pimage WHERE PackageId=:imgid";
        $query = $dbh->prepare($sql);

        $query->bindParam(':imgid', $imgid, PDO::PARAM_INT);
        $query->bindParam(':pimage', $pimage, PDO::PARAM_STR);

        $query->execute();
        return $query->rowCount(); 
    }
}

?>
