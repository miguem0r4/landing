<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$errorMSG = "";
$from = "kpzei42za9zs@sportsport.com.co";

require("PHPMailer-master/PHPMailerAutoload.php");

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
}else{
    if($errorMSG == ""){
        echo "Ocurrio un error";
    } else {
        echo $errorMSG;
    }
}

?>