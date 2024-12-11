<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

    $correo = $_POST['userEmail'];
    $total = $_POST['total'];
    $nombre = $_POST['userName'];

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'inpetsmaster@gmail.com'; 
        $mail->Password = 'ufma stgi uacb ipnw'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('inpetsmaster@gmail.com', 'Master In Pets');
        $mail->addAddress($correo);
        $mail->isHTML(true);    
        $mail->Subject = 'Confirmacion de compra';
        $mail->Body = "<h1>Hola $nombre</h1><p>Gracias por tu compra. El total es de: <strong>\$$total</strong>.</p>";

        $mail->send();

        echo "Correo enviado con éxito.";
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }

?>
