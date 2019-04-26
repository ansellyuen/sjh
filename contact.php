<?php

if((!isset($_POST['submit'])) {
    echo 'Error; You need to submit the form.'
}
    $recipient="ansellyuen@gmail.com";
    $subject="Contact Us Message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
//validate first
if(empty($sender)||empty($senderEmail)||empty($message))
   {
       echo "Fill out required fields";
       exit;
   }

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>