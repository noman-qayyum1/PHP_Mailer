<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customerEmail = $_POST['email'];
    $customerPassword = $_POST['password'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = '747747noman@gmail.com';  // Replace with your email address
        $mail->Password = 'ebwy htnk bsdn epgg';    // Use an app password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender's email and recipient's email
        $mail->setFrom('747747noman@gmail.com', 'Your Company Name');
        $mail->addAddress($customerEmail); // Recipient's email address from form input

        // Email subject and body content
        $mail->isHTML(true);
        $mail->Subject = 'Your Account Details';
        $mail->Body    = "
        <h1>Welcome to Our Service!</h1>
        <p>Here are your account details:</p>
        <p><strong>Email:</strong> $customerEmail</p>
        <p><strong>Password:</strong> $customerPassword</p>
        <p>Please keep these details safe and do not share them with anyone.</p>";

        // Send the email
        if ($mail->send()) {
            echo 'Email has been sent successfully to ' . htmlspecialchars($customerEmail);
        } else {
            echo 'Failed to send email.';
        }
    } catch (Exception $e) {
        // Display detailed error messages
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
