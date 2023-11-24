<?php
require('./dashboardredirect.php');
require('./Classes/TransactionMonthHandler.php');

$dsn = 'mysql:host=localhost;dbname=guideme';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$transactionHandler = new TransactionMonthHandler($dbh);

$paymentData = []; // Initialize the variable to avoid undefined variable error

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selectedMonth'])) {
    $selectedMonth = $_POST['selectedMonth'];
    $paymentData = $transactionHandler->getTransactionDataForMonth($selectedMonth);
} else {
    // Fetch all records when no month is selected
    $paymentData = $transactionHandler->getAllTransactionData();
}

function calculateTotalPayments($paymentData) {
    $totalPayments = 0;

    foreach ($paymentData as $result) {
        $totalPayments += $result['price'];
    }

    return $totalPayments;
}
?>
