<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '1510cyan@gmail.com';
    $mail->Password = 'cpxgbytsouoxdwij';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set email content
    $mail->setFrom('1510cyan@gmail.com', 'Carpool App');
    $mail->addAddress($email); // Add recipient email address here
    $mail->Subject = 'Contact Us'; // Set a subject for the email
    $mail->isHTML(true);
    $mail->Body = "
        <h2>Sip N Dip</h2>
        </hr>
        Hello $name, we have received your message!
    ";

    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}