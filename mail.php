<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];

    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Good Day po! <strong> '. $name.'! </strong></p>
        <p>Thank you for your feedback!</p>
        <br>
        A flower a day makes a brighter day!<br>
        <strong></b>Belles Fleurs 🌸</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "bellesfleurs6@gmail.com";
    $mail->Password = "knusghchvwrunezc";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("bellesfleurs6@gmail.com","Belles Fleurs");
    $mail->addAddress($email);
    $mail->isHTML(true);

    $mail->Subject = 'Inquiry/Feedback';
    $mail->Body = $msg;

    $mail->send();
    header('location:index.php');
}
?>