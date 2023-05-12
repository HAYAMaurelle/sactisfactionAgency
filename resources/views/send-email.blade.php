<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'maurellehaya@gmail.com';

// Set the email subject
$subject = 'New message from ' . $name;

// Set the email message
$body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

// Send the email
mail($to, $subject, $body);

// Redirect the user to a thank you page
header('Location: thank-you.html');
exit();

?>
