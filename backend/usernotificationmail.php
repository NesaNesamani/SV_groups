<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../include/config.php');
require('../vendor/autoload.php');


function userNotification($toname,$tomail,$attachment = true){

$mail = new PHPMailer(true);
$smtpconfig = new SMTPCONFIGURATION();
if($attachment){
$tobody = "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>

<pre>
Dear Mr. / Mrs. ".$toname.",
We would like to express our thanks for your interest in our apartment.
Regarding your inquiry, Please note that the mail is enclosed with Brochure, Floor Plans and Walk-through Videos at the end of this email.
Our Sales Team will contact you within 24hrs. Should there be any questions, please feel free to contact us on +91 - 9845001343 / 9845001560 / 9845001792 (or) write to us svgrandur@svgroups.in. We look forward to hear from you.

<a href='https://svgroups.in/new/svgroups/asset/brochure.pdf' target='_blank'> Broucher </a>
<a href='https://svgroups.in/new/svgroups/asset/2BHKVIEWS.pdf' target='_blank'> 2BHK </a>
<a href='https://svgroups.in/new/svgroups/asset/3BHKVIEWS.pdf' target='_blank'> 3BHK </a>
<a href='https://svgroups.in/new/svgroups/asset/masterplan.jpg' target='_blank'> Masterplan </a>

Yours sincerely,
Marketing Teams,
SV Groups
</pre>

</body>
</html>";
}else{
$tobody = "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>

<pre>
Dear Mr. / Mrs. ".$toname.",
We would like to express our thanks for your interest in our organization.

Yours sincerely,
SV Groups
</pre>

</body>
</html>";
}


    try {
    $mail->isSMTP(); 
    $mail->SMTPAuth   = true;                                 
    $mail->Host       = $smtpconfig->Host;                     
    $mail->Username   = $smtpconfig->Username;                 
    $mail->Password   = $smtpconfig->Password;                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = $smtpconfig->Port;
    $mail->SetFrom('svgrandur@svgroups.in', 'SV Groups');
    $mail->addAddress($tomail,$toname);
    $mail->Subject = 'SV groups - Thanks for interest';
    $mail->Body = $tobody;
    $mail->isHTML(true);
    $mail->send();
    } catch (Exception $e) {

    }
}