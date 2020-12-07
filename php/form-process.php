<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions



$errorMSG = "";
$from = "kpzei42za9zs@sportsport.com.co";



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
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

if ($errorMSG == ""){
	// send email
    $to = "ingmiguelmora@hotmail.com";
    $headers = "From:" . $from;       
//    $success = $mail. mail($EmailTo, $Subject, $Body,$headers);            
try {  
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 3;
    $mail->From = $from;
    $mail->FromName = "Test";
    $mail->Host = "localhost"; 
    $mail->SMTPAuth = false; 
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;
    $mail->IsHTML(true);
    $mail->Subject = $Subject;
    $mail->Body = $Body;
    $exito = $mail->Send();
    echo "Mensaje envíado, pronto nos pondremos en contacto";
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