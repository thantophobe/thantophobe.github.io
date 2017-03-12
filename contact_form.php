<?php

$mail_to = "youremail@email.com"; // replace it with your email

$subject = "New message sent from your website";


$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];


date_default_timezone_set("Africa/Cairo"); // replace it with your timezone


$body = "------------------------------------------------------------------". "\n\n";

$body .= "New Message From :  ". "$name ". "<$email>". "\n\n";

$body .= "------------------------------------------------------------------". "\n\n";

$body .= "Client Name :  ". "$name". "\n\n";

$body .= "Client Email :  ". "$email". "\n\n";

$body .= "Client Message :  ". "\n\n". "   $message". "\n\n";

$body .= "------------------------------------------------------------------". "\n\n";

$body .= "Date :  ". date("l, j F, Y"). "   at  ". date("h:i A");


$from = "From :  ". "$name ". "<$email>";


if (mail($mail_to, $subject, $body, $from)) {
    
    echo "<body style='background-color:#26292e;padding:0 10px;'><div style='margin:100px auto 20px;max-width:500px;background-color:#2c3037;color:#24eda0;font-style:italic;font-family:tahoma,arial;padding:15px;border:3px solid #3e3e3e;box-shadow:0 0 5px 0px #000;'><h2>Thank you!</h2><p style='color:#34bf8a;'>Your message has been successfully sent. We will contact you very soon!</p></div></body>";
    
} else {
    
    echo "<body style='background-color:#26292e;padding:0 10px;'><div style='margin:100px auto 20px;max-width:500px;background-color:#2c3037;color:#ff3b3b;font-style:italic;font-family:tahoma,arial;padding:15px;border:3px solid #3e3e3e;box-shadow:0 0 5px 0px #000;'><h2>Sorry!</h2><p style='color:#d10909;'>There was an error sending your message. Please try again later!</p></div></body>";
    
}

?>