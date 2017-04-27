<?php
$config = parse_ini_file("{$_SERVER['DOCUMENT_ROOT']}/config.ini");
$etcPath = $config['etc_directory'];
$debug = $config['debug'];

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$body = $_POST['body'];

require "{$_SERVER['DOCUMENT_ROOT']}/include/third_party/PHPMailer/PHPMailerAutoload.php";
require "$etcPath/email-creds.php";
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "sub5.mail.dreamhost.com";
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pwd;
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->From = $pwd;
$mail->FromName = "$firstname $lastname";
$mail->addReplyTo($email);
if (!$debug) {
	$mail->addAddress("naturesnanny@columbus.rr.com");
} else {
	$mail->addAddress('harris.1305@gmail.com');
}
$mail->Subject = "New Contact Submission";
$mail->Body = $body;

$mailSent = $mail->send();
header('Location: /contact?success=' . var_export($mailSent, true));
