<?php
$subject = "Inquriy from website";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: my website' . "\r\n" . 'Reply-To: ' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("dr.trybuch@gmail.com" , $subject, "name:\r" . $name . "\r\n\r\nsubject:\r\r\n\r\nmessage:\r" .$message . "\r\n\r\ne-mail:\r" . $email, $headers);
?>
