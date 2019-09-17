<?php
  $email = $_Post['email'];
  $rco_email = 'asainez@ucmerced.edu';
  $body = "New subscriber: $email"
  $headers = "From: $rco_email \r\n";

  $headers .= "Reply-to: $email \r\n";

  mail($rco_email, "New Form Submission", $body, $headers);

  header("Location: index.html");
 ?>
