<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordChange
 *
 * @author Kavindu
 */
class PasswordChange {

    //put your code here
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function changePassword($username, $password, $newpassword) {
        $password = md5($password);
        $newpassword = md5($newpassword);

        $sql = "SELECT Password FROM admin WHERE admin_email  = :username AND password = :password";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            $con = "UPDATE admin SET password = :newpassword WHERE admin_email = :username";
            $chngpwd1 = $this->dbh->prepare($con);
            $chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            return "Your Password has been changed successfully";
        } else {
            return "Your current password is wrong";
        }
    }

}
