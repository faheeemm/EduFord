<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = '@sonanderelliot@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".;
$email_body = "User Email: $visitor_email.\n".;
$email_body = "User Subject: $subject.\n".;
$email_body = "User Message: $message.\n".;

$to = 'faheemahmedhyd81@gmail.com'

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location:  contact.html");
?>