<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'mailer/phpmailer/phpmailer/src/Exception.php';
    require 'mailer/phpmailer/phpmailer/src/PHPMailer.php';
    require 'mailer/phpmailer/phpmailer/src/SMTP.php';


    //Load Composer's autoloader
    require 'mailer/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    $mail->isSMTP();//Send using SMTP
    $mail->Host       = 'smtp.gmail.com';//Set the SMTP server to send through
    $mail->SMTPAuth   = true;//Enable SMTP authentication
    $mail->Username   = 'mohamadgithub9@gmail.com';//SMTP username
    $mail->Password   = 'mohamad123mohamad';//SMTP password
    $mail->SMTPSecure = "tls";//Enable implicit TLS encryption
    $mail->Port       = 587;//TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS ""`

    $mail->isHTML();
    $mail->CharSet = "UTF-8";
?>