<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];

    $email_subject = "new massage from site";

    $email_body =   "Name: $name\n".
                    "user eamil: $email\n".
                    "Massge: $massage\n";
    
    $to = "abhi.agni00@gmail.com";

    mail($to,$email_subject,$email_body);
    header("index.html");
?>