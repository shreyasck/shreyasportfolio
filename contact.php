<?php
 $name = $_POST['firstname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $subjects = $_POST['subject'];	
 $message = $_POST['message'];

 $formcontent="Name: $name\n  Email: $email\n Phone Number: $phone\n Subject: $subjects\n  Comments: $message";
 $recipient = "shreyas@iquadtech.com";
 $subject = "Enquiry Form";
 $mailheader = "From: $email \r\n";
mail($recipient,$subject,$formcontent,$mailheader) or die("Error!");
header("Location: index.html");
?>