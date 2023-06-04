
<?php
$email = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["message"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;
 
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

 
$mail = new PHPMailer(true);
try {
    // $email = $_POST["email"];
    // $name = $_POST["name"];
    // $subject = $_POST["subject"];
 
    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Good Day! <strong> '.$name.'! </strong></p>
        <p>We have received your message. Thanks you for feedback to us, '.$name.'!</p>
        <br>
        Enjoy your day!,<br>
        🌸 Get some flowers to color your life.🌸<br>
        <strong></b> Belles Fleurs</strong>
       Facebook Link: https://www.facebook.com/bellesfleursbyz
    </body>
    </html>';
 
 
    // $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bellesfleurs6@gmail.com';
    $mail->Password = 'pmpxiceerfzusvxr';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPOptions = array('ssl' => array('verify_peer'       => false,
                                          'verify_peer_name'  => false,
                                          'allow_self_signed' => true));
 
    $mail->setFrom('bellesfleurs6@gmail.com', 'Belles Fleurs');
 
    $mail->addAddress($email); 
    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;
 
    $mail->send();
    echo 'Sent!';
} catch (Exception $e){
    echo 'Error Sending!';
}
    header('location: index.php');

    