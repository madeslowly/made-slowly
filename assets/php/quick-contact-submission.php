---
---
<?php
/* Request feilds from _includes/quick-contact.html */
// email to owner
  $to = "{{ site.author.email }}";
  $subject = "{{ site.url }} inquiry";

  $inquiryOption = $_REQUEST['inquiryOption'] ;
  $email = $_REQUEST['email'] ;

  $username = strstr($_REQUEST['email'], '@', true);

  // Sanitize E-mail Address
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $message_body .= "Email: ".$_POST["email"]."\n";
  $message_body .= "Subject: ".$_POST["inquiryOption"]."\n";

  $headers = "From:" . $email;

  mail($to, $subject, $message_body, $headers);

// email to user
  $subject_response = "Thank you for your message" ;

  $message_body_response = "Hello,\n\n";

  $message_body_response .= "This is an automated response to the message you sent whilst browsing madeslowly.co.uk.\n\n";

  $message_body_response .= "Thank you for your message, I'll get back to you as soon as I can.\n\n\n";

  $message_body_response .= "Arran Curran\n\n";
  $message_body_response .= " Made Slowly | Custom websites designed in Oxford \n\n\n";

  $headers_response = "From:" . $to;

  mail($email, $subject_response, $message_body_response, $headers_response );

  $host  = $_SERVER['HTTP_HOST'];

  header("Location: /contact-confirm/");
  exit();
?>
