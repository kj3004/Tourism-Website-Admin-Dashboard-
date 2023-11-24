<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Include the database configuration file
include('includes/config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eid'])) {
    // Assuming you get the inquiry ID from the POST data
    $inquiry_id = isset($_POST['eid']) ? $_POST['eid'] : 0;

    // Assuming you get the inquiry ID from the POST data
$inquiry_id = isset($_POST['eid']) ? $_POST['eid'] : 0;

// Fetch the reply message from the form
$reply_message = isset($_POST['reply']) ? $_POST['reply'] : '';

// Fetch inquiry details from the database based on the inquiry ID
$sql = "SELECT email, subject FROM contact_us WHERE enq_id = :inquiry_id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':inquiry_id', $inquiry_id, PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data) {
    // Extract details
    $receiver_email = $data['email'];
    $subject = $data['subject'];

    // Your admin email address
    $admin_email = 'guidemeofficial.00@example.com';

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'guidemeofficial.00@gmail.com'; // Your SMTP username
        $mail->Password   = 'mzos enrr gsrl bkju'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom($admin_email, 'Guide_Me');
        $mail->addAddress($receiver_email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "Thank you for contacting us. <br><br>{$reply_message}";

        // Send the email
        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send email. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Inquiry not found.";
}
}