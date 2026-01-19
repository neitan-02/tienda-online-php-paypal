<?php

    use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

class Mailer {

function enviarEmail($email, $asunto, $cuerpo) 
{
    require_once './config/config.php';
    require './phpmailer/src/PHPMailer.php';
    require './phpmailer/src/SMTP.php';
    require './phpmailer/src/Exception.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = MAIL_USER;     //SMTP username
    $mail->Password   = MAIL_PASS;                      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = MAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    

    //Correo emisor y nombre
    $mail->setFrom(MAIL_USER, 'Tienda cdp');
    //Correo receptor y nombre
    $mail->addAddress($email);    

    //Contenido
    $mail->isHTML(true);      //se establece el formato de correo electronico en HTML                            
    $mail->Subject = $asunto;  //Titulo del correo

    //Cuerpo del correo
    $cuerpo = $cuerpo;
    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');


    //Enviar correo
    $mail->CharSet = 'UTF-8';
    $mail->Body    = $cuerpo;

    if($mail->send()){
        return true;
    } else {
        return false;
    }

} catch (Exception $e) {
    echo "Error al enviar el correo electronico no de la compra: {$mail->ErrorInfo}";
    return false;
}
}
}