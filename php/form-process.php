<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$errorMSG = "";
$from = "kpzei42za9zs@sportsport.com.co";


include("class.phpmailer.php");
function sendMail($address,$username,$body){
            $mail = new PHPMailer();
            $mail->IsSMTP(); // telling the class to use SMTP
            //$mail->Host       = "smtp.gmail.com"; // SMTP server
            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                // 1 = errors and messages
                                                                           // 2 = messages only
            // $mail->SMTPAuth   = true;                  // enable SMTP authentication
            // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            // $mail->Host       = "smtp.gmail.com";      // sets  as the SMTP server
            // $mail->Port       = 465;                   // set the SMTP port for the server
            // $mail->Username   = "xyz@gmail.com";  // username
            // $mail->Password   = "test121232";            // password

            $mail->SetFrom($from, 'Contact');

            $mail->Subject    = "Enquiry for tour and travels package";



            $mail->MsgHTML($body);

            $address = $address;
            $mail->AddAddress($address, $username);
            $mail->AddCC('miguel041106@gmail.com');

            if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
            echo "Message sent!";
            }
}


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
    $success = mail($EmailTo, $Subject, $Body,$headers);        
    sendMail($EmailTo, $EmailTo, $Body);
	echo "Mensaje envíado, pronto nos pondremos en contacto";
}else{
    if($errorMSG == ""){
        echo "Ocurrio un error";
    } else {
        echo $errorMSG;
    }
}

?>