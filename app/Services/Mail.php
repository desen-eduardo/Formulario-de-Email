<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    private $mail;

    public function __construct(string $name, string $email, string $message) 
    {   
        $this->mail = new PHPMailer(true);

        try {
            //Server settings
            //$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;               
            $this->mail->isSMTP();   
            $this->mail->CharSet    = 'UTF-8';                                         
            $this->mail->Host       =  HOST;                     
            $this->mail->SMTPAuth   = true;                                   
            $this->mail->Username   = EMAIL;                    
            $this->mail->Password   = PASSWORD;                              
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
            $this->mail->Port       = PORT;                                    
        
            //Recipients
            $this->mail->setFrom('from@example.com', 'Mailer');
            $this->mail->addAddress($email, $name);     //Add a recipient
        
            //Content
            $this->mail->isHTML(true);                                  
            $this->mail->Subject = "sistema de e-mail usando phpmailer";
            $this->mail->Body    = $message;
            $this->mail->AltBody = $message;

            $this->mail->send();
            
        } catch (Exception $e) {
            return $this->mail->ErrorInfo;
        }
    }

    public function error()
    {
        return $this->mail->ErrorInfo;
    }
}

