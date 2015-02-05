<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$m = new PHPMailer;

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2; //remove in production

$m->Host = "smtp.gmail.com";
$m->Username = 'example@gmail.com';
$m->Password = 'password';
$m->SMTPSecure = 'ssl';
$m->Port = 465;


$m->From = 'example@gmail.com';
$m->FromName = 'Php Ifah';
$m->addReplyTo('reply@gmail.com', 'Reply address');
// $m->addAddress('example@gmail.com', 'Mohamed Ifah');
$m->addAddress('example@gmail.com', 'Php Ifah');
// $m->addAddress('example@gmail.com', 'ifaa x h');
// $m->addCC('example@gmail.com', 'Mohamed Ifah');
// $m->addBCC('example@gmail.com', 'Mohamed Ifah');



$m->isHTML(true);


$m->Subject = 'Test email';
$m->Body = '<p>This is the body of an email!</p><p>This is a new paragraph and i am <strong>bold</strong></p>';
$m->AltBody = 'This is the body of an email!';

// var_dump($m->send());

if($m->send()){
	echo 'Email sent.';
}else{
	echo $m->ErrorInfo;
}

?>