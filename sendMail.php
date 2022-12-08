<?php

require 'vendor\autoload.php';
// Import the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Specify the SMTP server and credentials
$mail->isSMTP();
$mail->Host = 'smtp.smtp2go.com';
$mail->Port = 2525;
$mail->SMTPAuth = true;
$mail->Username = 'annyeongstudio';
$mail->Password = 'annyeongstudio';

if (isset($_POST['scheduleAppointment'])) {
    // Set the sender and recipient addresses
    $mail->setFrom('jhannprose@gmail.com', 'Annyeong Studio');
    $mail->addAddress('jannroset@gmail.com', 'Jann Rose');

    // Set the subject and body of the email
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using SMTP2GO in PHP.';

    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error: '.$mail->ErrorInfo;
    }
}



    
?>