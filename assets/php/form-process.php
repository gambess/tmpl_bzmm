<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

$EmailTo = "info@paellerasperu.com";
$Subject = "Nuevo correo electronico desde la pagina paellerasperu.com";

//$headers = "From: $email";
//$headers = "From: web-page@paellerasperu.com";
$headers = 'From: web-page@paellerasperu.com'."\r\n" . 'Reply-To: '.$email;

$extraHeaders = '-fweb-page@paellerasperu.com';

$Greetings = "Saludos Paelleros.\n Este es el correo electronico enviado desde la pagina paellerasperu.com";
// prepare email body text
$Body = "";
$Body .= $Greetings;
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Correo Electronico: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Asunto del Mensaje: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

//die($EmailTo . $Subject . $Body . $headers . $extraHeaders);
// send email
$success = mail($EmailTo, $Subject, $Body, $headers, $extraHeaders);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}