<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Recipient email address
  $to = 'Ramih5500@outlook.com'; 
  
  // Set email subject
  $subject = 'New Contact Form Submission';
  
  // Set email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Prepare email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";
  
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you! Your message has been sent.";
  } else {
    // Failed to send email
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>