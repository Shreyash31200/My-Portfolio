<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $number = $_POST["number"]; 
  $esubjext = $_POST["esubject"]; 
  $message = $_POST["message"]; 

 
  $to = "mihirkumar6128@gmail.com"; 
  $subject = "New Contact Form Submission"; 
  $body = "You have received a new message from the contact form:\n\n" . 
          "Name: $name\n" . 
          "Email: $email\n" .
          "Number: $number\n" . 
          "EmailSubject: $esubject\n" .
          "Message:\n$message\n"; 
  $header = "From: $name <$email>\r\n" . 
            "Reply-To: $email\r\n" . 
            "X-Mailer: PHP/" . phpversion(); 
 
  if (mail($to, $subject, $body, $header)) { 
    echo "Message sent successfully!"; 
  } else { 
    echo "An error occurred while trying to send the message."; 
  } 
} 
?> 