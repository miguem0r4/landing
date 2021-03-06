<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$errorMSG = "";
$from = "contacto@sportspot.com.co";

// EMAIL
if (empty($_POST["email1"])) {
    $errorMSG .= "Email es requerido  ";
} else {
    $email = $_POST["email1"];
}

$EmailTo = "ingmiguelmora@hotmail.com";
$Subject = "Nuevo Lead";

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;

if ($errorMSG == ""){
	// send email
    $to = "ingmiguelmora@hotmail.com";
    $headers = "From:" . $from;       
//    $success = $mail. mail($EmailTo, $Subject, $Body,$headers);            
try {  
    $mail = new PHPMailer();
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output    
    $mail->isSMTP();                                            // Send using SMTP
    $mail­->SMTPSecure = "ssl";
    $mail->Username   = $from;                     // SMTP username
    $mail->Password   = 'contacto2020';                               // SMTP password

    /* Local
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
    $mail->Body = $Body;
    $exito = $mail->Send();

    echo "Pronto nos pondremos en contacto";    
      //code...
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