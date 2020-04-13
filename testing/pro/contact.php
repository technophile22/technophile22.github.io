
<?php

if($_POST) {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $to = "raghavmangal99@gmail.com"; // your mail here
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $subject = "Form to email message";
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $body = "Message: $message\nE-mail: $email";

  if(@mail($to, $subject, $body)) {
    echo "Sent Successfully";
  }

}
?>
