<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];

echo $name . " " .  $email . " " . $tel . " ";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
   
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'steyntjehyt08@gmail.com';                     //SMTP username
    $mail->Password   = 'cmwvxvpchpnbrruz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'workshop project');
    $mail->addAddress($email);     //Add a recipient
   
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Mobile: ". $tel."\n je bestelling is geplaats";

    //Content
//    for($i = 1; $i<=20; $i++
//    while(true)
//    {
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
//    }


    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
