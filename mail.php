<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

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
    $mail->Username = "christianrms00@gmail.com";
    $mail->Password = "rlhycywfauiwdesz";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("christianrms00@gmail.com","Belles Fleurs");
    $mail->addAddress($email);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    header('location:index.php');
}
?>