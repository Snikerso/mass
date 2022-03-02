<?php
    ini_set("SMTP","smtp.gmail.com" );
    ini_set("smtp_port","587");
    ini_set('sendmail_from', 'snikersdro@gmail.com');   
    echo "Message was send";
    $header = "From: twoj@email.com \nContent-Type:".
        ' text/plain;charset="UTF-8"'.
        "\nContent-Transfer-Encoding: 8bit";
    $to = "snikersdro@gmail.com";
    $subject = "Wiadomość testowa";
    $message = "Witaj to wiadomość testowa";
    mail($to, $subject, $message, $header);
?>