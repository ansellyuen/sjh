<?php

if((!isset($_POST['submit'])) {
    echo 'Error; You need to submit the form.'
}
    $recipient="ansellyuen@gmail.com";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
//validate first
if(empty($sender)||empty($senderEmail)||empty($message))
   {
       echo "Fill out required fields";
       exit;
   }

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    echo "Submission Received";
}

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>