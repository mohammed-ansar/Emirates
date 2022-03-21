<?php
    $name= $_POST['name'];
    $visiter_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'mohammedansarplk@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                  "User Email:$visiter_email.\n".
                  "User Message: $message.\n";
    
    
    $to = "emiratesindustrial1@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    
?>