<?php
    $name=$_Post['name'];
    $visitor_email=$_['email'];
    $message= $_POST['message'];


    $email_from='raimohitrai9988@outlook.com';
    $email_subject="New Form Submission";
    $email_body= "User Name : $name.\n". 
                    "User Email: $visitor_email.\n". 
                        "User Message: $message.\n";

    $to="raimohitrai12345@gmail.com";
    $headers="From $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";
    mail($to,$email-subject,$email_body,$headers);
    header("Location: index.html");

