<?php
    include ('PHPMailer/Exception.php'); 
    include 'PHPMailer\PHPMailer.php'; 
    include 'PHPMailer\SMTP.php'; 
    
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception; 
    $mail = new PHPMailer;

    $visitor_email = $_POST['email'];
    $visitor_subject = $_POST['subject'];
    $text = $_POST['text'];

    $mail->isSMTP();                      // Set mailer to use SMTP 
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = '';   // SMTP username 
    $mail->Password = '';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 

    // Sender info
    $mail->setFrom('biuro@mass.com.pl', 'Mass Polska'); 
    $mail->addReplyTo('biuro@mass.com.pl', 'Mass Polska');
    $mail->AddAttachment($_FILES["attachment"]['tmp_name'], $_FILES["attachment"]['name']);

    // Add a recipient
    $mail->addAddress($visitor_email); 
    $mail->addAddress('biuro@mass.com.pl');  // tutaj trzeba dodać mail do którego ma dotrzeć czyli np: kontakt@mass.pl

    // Set email format to HTML 
    $mail->isHTML(true); 
    
    // Mail subject 
    $mail->Subject = $visitor_subject; 
    
    // Mail body content 
    $mail->Body = $text; 
 
    // Send email 
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else {
        header("Location: index.html");
    } 
?>