<?php


// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;

require_once './vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '9bd3b978c1aeaf';
$mail->Password = '7f5d56a4965230';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom($email);
$mail->addAddress('me@gmail.com', 'Me');
$mail->Subject = 'Thanks for choosing Our Hotel!';
// Set HTML 
$mail->isHTML(TRUE);
$mail->Body = "<html>$message</html>";
$mail->AltBody = $message;
// add attachment
$mail->addAttachment('//confirmations/yourbooking.pdf', 'yourbooking.pdf');
// send the message
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
