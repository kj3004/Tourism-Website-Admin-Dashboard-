<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Destination
 *
 * @author Kavindu
 */
class Destination {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function createDestination($data) {
        $pname = $data['destination_name'];
        $ptype = $data['destination_category'];
        $plocation = $data['destination_location'];
        $sdescription= $data['small_description'];
        $pdetails = $data['destinationdetails'];
        $pimage = $data['destinationimage']['name'];

        move_uploaded_file($data['destinationimage']['tmp_name'], "destinationimage/" . $pimage);

        $sql = "INSERT INTO destination(name,category,description,image,city,description_full) VALUES(:pname,:ptype,:sdescription,:pimage,:plocation,:pdetails)";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':pname', $pname, PDO::PARAM_STR);
        $query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
        $query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
        $query->bindParam(':sdescription', $sdescription, PDO::PARAM_STR);
        $query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
        $query->bindParam(':pimage', $pimage, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $this->dbh->lastInsertId();

        if ($lastInsertId) {
            return "Package Created Successfully";
        } else {
            return "Something went wrong. Please try again";
        }
    }
}
