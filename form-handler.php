<?php

if($_POST["submit"]) {
    $recipient="josh.t@visix.co.uk";
    $subject="New Contact Us submission";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $telephone=$_POST["telephone"];
    $message=$_POST["message"];

    $mailBody="A new submission has been received from the 'General Enquiry' form on the EBS Homepage:\n\nName: $sender\n Phone number: $telephone\n Email: $senderEmail\n Message: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>