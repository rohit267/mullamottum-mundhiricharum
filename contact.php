<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from ='itsstrangerman@gmail.com';
    $email_subject = "new request";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "user message: $message.\n";

    $to ="yaah.education@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: c.html");
?>