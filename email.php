
<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

/**
 * This example shows making an SMTP connection with authentication.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Brasilia');
require 'class/class.phpmailer.php';
require 'class/PHPMailerAutoload.php';
//Create a new PHPMailer instance

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.zoho.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "smtp@alvitre.net";
//Password to use for SMTP authentication
$mail->Password = "smtp@123";
//Set who the message is to be sent from
$mail->setFrom('smtp@alvitre.net', 'LS Star');
//Set an alternative reply-to address
$mail->addReplyTo('lsstar@lsstar.com.br', 'lsstar');
//Set who the message is to be sent to
$mail->addAddress('lsstar@lsstar.com.br', 'lsstar');
//Set the subject line
$mail->Subject = 'Contato LS Star';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('
    <br>Meu nome é: '.$nome . 
     '<br> Meu telefone é: ' . $telefone .
     '<br> Meu E-email é: ' . $email .
     '<br><br> Minha mensagem é: ' . $mensagem .   
    
        '<br><br>Enviado pelo formulario de contato do site lsstar.com.br');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->CharSet = "UTF-8";
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Enviado com sucesso!";
    header('location: contato.php');
}
