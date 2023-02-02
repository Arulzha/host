<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $message = $_POST["message"];

  $to = "zonaclaimer@gmail.com";
  $subject = "Partnership Request from $name";
  $body = "Name: $name\nEmail: $email\nCompany: $company\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Your email has been sent successfully.";
  } else {
    echo "An error occurred while sending your email.";
  }
?>
