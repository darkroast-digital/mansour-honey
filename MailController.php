<?php 


// create message
//send message
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

        $params = $_POST;

        $name = $params['name'];
        $email = $params['email'];
        $subject = $params['subject'];
        $message = $params['message'];

        $mail->setFrom($email, $name);
        $mail->addAddress('kim@darkroast.co', 'Kim');
        $mail->addReplyTo('kim@darkroast.co', 'Kim');
        $mail->ReutrnPath='kim@darkroast.co';

        $mail->isHTML(true);

        $body = "Name: " . $name . "<br/>" .
                "Email: " . $email . "<br/>" .
                "Subject: " . $subject . "<br/>" .
                "Message: " . $message;

        $mail->Subject = "New message from Mansour Honey contact form";
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "Success!";
        }