<?php
require __DIR__.'/../../PHPMailer/src/Exception.php';
require __DIR__.'/../../PHPMailer/src/PHPMailer.php';
require __DIR__.'/../../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer{
    function __construct($name) {
        $this->name = $name;
      }

      function send_email($title,$body,$recepient_email){ 

        $recepient_email = 'recepient@email.com'; #change to recepients email
        $email = new PHPMailer();
        $email->SetFrom('test@test.com', 'test@test.com'); #change to your email
        $email->Subject   = $title;
        $email->Body      = $body;
        $email->IsHTML(true);
        $email->CharSet = 'UTF-8';
        $email->Encoding = 'base64';
        $email->AddAddress( $recepient_email );
  
              if(!$email->send()) {
                return "Error"; #error responce
              } else {
                return 'Thank you for message.'; #succes responce
              }
  
      }

}