<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'djsarkar222@gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'djsarkar222@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'Djvizz@10';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('djsarkar222@gmail.com', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('djsarkar222@gmail.com', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = 	'<div style="background-image: url(\'public/images/favicon.png\'); background-size: cover; padding: 20px;">
	                        <h1 style="color: white;">Happy Valentine\'s Day Moo</h1>
	                        <p style="color: white;">Onek Bhalobashi tomake ami amar shonui ta. You are the best thing that has ever happened to me ❤</p>
	                      </div>';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
