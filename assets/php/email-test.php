---
---

<?php
/* Request feilds from _includes/quick-contact.html */
// email to owner

  $email = "arrancurran@gmail.com" ;

  // Sanitize E-mail Address
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// email to user
  $subject_response = "Thank you for your message" ;

  $message_body_response = "{% include email-confirmation.html %}";

  $headers_response = "From:" . "arran@madeslowly.co.uk\r\n";

  $headers_response .= "MIME-Version: 1.0\r\n";
  $headers_response .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  mail($email, $subject_response, $message_body_response, $headers_response);

  $host  = $_SERVER['HTTP_HOST'];

  header("Location: /contact-confirm/");
  exit();
?>
