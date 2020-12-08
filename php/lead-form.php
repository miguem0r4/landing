<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$errorMSG = "";
$from = "miguel041106@gmail.com";

// EMAIL
if (empty($_POST["email1"])) {
    $errorMSG .= "Email es requerido  ";
} else {
    $email = $_POST["email"];
}

$EmailTo = "ingmiguelmora@hotmail.com";
$Subject = "Nuevo mensaje de contacto";

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
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail­->SMTPSecure = "ssl";
    $mail->SMTPSecure = 'tls';

    $mail->Username   = $from;                     // SMTP username
    $mail->Password   = 'T41esnacionalg';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

/*
    $mail­->isSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Debo de hacer autenticación SMTP
$mail­->SMTPAuth = true;
$mail­->SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail­->Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail->Port       = 465;
//indico un usuario / clave de un usuario de gmail
$mail­->Username = "miguel041106@gmail.com";
$mail­->Password = "T41esnacionalg";

  */
    //Recipients
    $mail->setFrom($from, 'Miguel angel mora miranda');
    $mail->addAddress($to, 'Miguel Mora');
    //$mail->addAddress('contacto@sportspot.com.co', 'Contacto');
    //$mail->addAddress('aumana@sportspot.com.co', 'Andres');
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $Subject;
    $mail->Body = $Body;
    $exito = $mail->Send();

    echo "Pronto nos pondremos en contacto";
    echo $exito;
      //code...
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else{
    if($errorMSG == ""){
        echo "Ocurrio un error";
    } else {
        echo $errorMSG;
    }
}

?>