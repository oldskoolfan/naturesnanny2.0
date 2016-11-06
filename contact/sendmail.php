<?php

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$body = $_POST['body'];

require "{$_SERVER['DOCUMENT_ROOT']}/include/third_party/PHPMailer/PHPMailerAutoload.php";
require "/Users/andrew/email-creds.php";
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pwd;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->From = $email;
$mail->FromName = "$firstname $lastname";
$mail->addReplyTo($email);
$mail->addAddress("naturesnanny@columbus.rr.com");
$mail->Subject = "New Contact Submission";
$mail->Body = $body;

$mailSent = $mail->send();
header('Location: /contact?success=' . var_export($mailSent, true));
