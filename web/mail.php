<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username = '0513135661c60b';                    //SMTP username
    $mail->Password = '350a34b3a24bd9';                             //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreplay@rossibrunori.com', 'Mailer');
    $mail->addAddress($_POST['email'], $_POST['name']);
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject ='Richiesta da sito Internet Rossi Brunori' ;
    $mail->Body    = $_POST['messaggio'];
    $mail->AltBody = $_POST['name'];

    $mail->send();
    header('Contente-Type: application/json');
    echo json_encode(['success'=> true,'descrizione'=>'La mail  e\' stata inviata con successo!']);

} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo json_encode(['success'=> false,'descrizione'=>'La mail non e\' stata inviata con successo!']);

}


