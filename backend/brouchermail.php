<?php
header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');
include_once("./SMTPconfig.php");
include("./usernotificationmail.php");

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$smtpconfig = new SMTPCONFIGURATION();

try {
//HTTP Request parse start
$name = $_REQUEST['yourname'];
$mobile = $_REQUEST['mobilenumber'];
$email = $_REQUEST['emailaddress'];
$content = $_REQUEST['description'];
//HTTP Request parse end

$mail->isSMTP(); 
$mail->SMTPAuth   = true;                                 
$mail->Host       = $smtpconfig->Host;                     
$mail->Username   = $smtpconfig->Username;                 
$mail->Password   = $smtpconfig->Password;                   
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
$mail->Port       = $smtpconfig->Port;

$mail->SetFrom('nesamani@friendswebsolution.com', 'Nesamani R');
$mail->addAddress('nesamani@friendswebsolution.com', 'Nesamani R');
$mail->addAddress('nesamani@vishgyana.com', 'Nesamani R');
$mail->Subject = 'Broucher Mail';
$mail->Body=
        "<!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Document</title>
            </head>
            <body>
                Name    : ".$name."     <br/>
                Email   : ".$email."    <br/>
                Mobile  : ".$mobile."   <br/>
            </body>
        </html>
        ";
$mail->isHTML(true);
$mail->send();

userNotification($name,$email);

echo json_encode((object) ["sent" => true, "message" => 'Message has been sent']);

} catch (Exception $e) {
echo json_encode((object) ["sent" => false, "message" => $mail->ErrorInfo]);
}