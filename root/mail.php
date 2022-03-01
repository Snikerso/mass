<?php
      // define('__ROOT__', dirname(dirname(__FILE__)));
      //   require('./packages/sendgrid-php-main/sendgrid-php.php');
      //   // $apiKey = getenv('SENDGRID_API_KEY');
      //   // $sg = new SendGrid($apiKey);
      //   $email = new \SendGrid\Mail\Mail();
      $header = "From: twoj@email.com \nContent-Type:".
          ' text/plain;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";
      $to = "snikersdro@gmail.com";
      $subject = "Wiadomość testowa";
      $message = "Witaj to wiadomość testowa";
      mail($to, $subject, $message, $header);
?>