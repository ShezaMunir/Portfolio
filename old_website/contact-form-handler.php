<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'https://shezamunir.github.io/Portfolio/';

    $email_subject = "New Message";

    $email_body = "Name: $name. \n".
                    "User email: $visitor_email. \n".
                        "Message: $message.\n";


    $to = "23100116@lums.edu.pk"

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers)

    header("Location: index.html");
?>