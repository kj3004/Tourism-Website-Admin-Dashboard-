<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Authentication
 *
 * @author Kavindu
 */
class Authentication {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function authenticate($username, $password) {
        $password = md5($password);
        $sql = "SELECT admin_email, password FROM admin WHERE admin_email = :uname AND password = :password";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':uname', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>
