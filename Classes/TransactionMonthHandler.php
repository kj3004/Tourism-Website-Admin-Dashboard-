<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransactionMonthHandler
 *
 * @author Kavindu
 */


class TransactionMonthHandler {


    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function getTransactionDataForMonth($selectedMonth) {
        try {
            $tableName = 'transaction';
            $sql = "SELECT * FROM $tableName WHERE MONTH(transaction_date) = :selectedMonth";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindParam(':selectedMonth', $selectedMonth, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
            exit;
        }
    }
  
    public function getAllTransactionData() {
        // Fetch all transaction data from the database
        $sql = "SELECT * FROM transaction"; // replace 'your_transaction_table' with your actual table name
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
  
}






