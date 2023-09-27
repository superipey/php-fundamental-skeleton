<?php
include_once __DIR__ . '/../lib/config.php';
include_once __DIR__ . '/../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = $_CONFIG['MAIL_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_CONFIG['MAIL_USERNAME'];
    $mail->Password = $_CONFIG['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('ferry@superipey.id', 'Ferry Stephanus Suwita');
    $mail->addAddress('ferry.stephanus.s@gmail.com', 'Ferry Suwita');     //Add a recipient

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->Send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}