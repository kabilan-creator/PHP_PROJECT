<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__."/vendor/autoload.php";

$mail = new PHPMailer(true);

//$mail->SMTPDebug=SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail_PORT = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Username = "kabilang638@gmail.com";
$mail->Password = "lbzv qipd wubc zjfz";

$mail->isHTML(true);

return $mail;

