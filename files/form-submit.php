<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Your email address where the message will be sent
  $to = 'tholumuzikhuboni@gmail.com';
  
  // Subject of the email
  $subject = 'Contact Form Message from ' . $name;
  
  // The email message
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  
  // Additional headers
  $headers = "From: $email\r\nReply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>