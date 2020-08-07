

<?php 
if(isset($_POST['submit'])){
    $to = "piyushj572@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone_number = $_POST['number'];
    $message = $_POST['comments'];
    $subject = "Form submission";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $from\n Phone Number: $phone_number\n Message: \n $message";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$email_body,$headers);
    
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>