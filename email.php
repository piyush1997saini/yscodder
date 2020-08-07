

<?php

if($_POST["submit"]) {
    $recipient="piyushj572@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $phone_number = $_POST['number'];
    $message=$_POST["comments"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone Number: $phone_number\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}
?>