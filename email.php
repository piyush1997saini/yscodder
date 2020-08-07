<?php 
$errors = '';
$myemail = 'piyushj572@gmail.com';

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone_number = $_POST['number'];
$message = $_POST['comments'];

if( empty($errors))
{
    $to = '$myemail';
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email_address\n Phone Number: $phone_number\n Message \n $message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);

    // $thankYou="<p>Thank you! Your message has been sent.</p>";
    echo '<script>alert("Thank You! Your Form is Submitted Successfully.")</script>';
}
?>