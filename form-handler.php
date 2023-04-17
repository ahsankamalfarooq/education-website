<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@teamkhr.com';
$email_subject = 'New From Submission';
$email_form = "User Name: $name./n".
                "User Email: $visitor./n".
                "Subject: $name./n".
                "User Message: $name./n".


$to = 'ahsanraza8766@gmail.com';
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);


header("Location: contact.html");






?>