<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$errorMSG = "";
$from = "contacto@sportspot.com.co";


// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email es requerido  ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensaje es requerido ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "ingmiguelmora@hotmail.com";
$Subject = "Nuevo mensaje de contacto";

// prepare email body text
$body = "";
$logo = '../assets/img/logo.png';
$link = '#';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Nombre:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
$body .= "</tr>";	
$body .= "<tr><td></td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

if ($errorMSG == ""){
	// send email
    $to = "ingmiguelmora@hotmail.com";
    $headers = "From:" . $from;       
//    $success = $mail. mail($EmailTo, $Subject, $body,$headers);            
try {  
    $mail = new PHPMailer();
    $mail->isSMTP();                                            // Send using SMTP
    $mail­->SMTPSecure = "ssl";
    $mail->Username   = $from;                     // SMTP username
    $mail->Password   = 'contacto2020';                               // SMTP password

    /* Local
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output        
    $mail->SMTPSecure = 'tls';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPAuth = true;
    $mail->Host       = 'smtp.zoho.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
*/
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 25; 
  
    //Recipients
    $mail->setFrom($from, 'Contacto SportSpot');
    $mail->addAddress($to, 'Miguel Mora');
    $mail->addAddress('contacto@sportspot.com.co', 'Contacto');
    $mail->addAddress('aumana@sportspot.com.co', 'Andres');
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $Subject;
    $mail->Body = $body;
    $exito = $mail->Send();
    echo "Mensaje envíado, pronto nos pondremos en contacto";    
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado: {$mail->ErrorInfo}";
}
}else{
    if($errorMSG == ""){
        echo "Ocurrio un error";
    } else {
        echo $errorMSG;
    }
}

?>