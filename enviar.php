<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-VErsion: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo . " \r\n";
$mensaje .= "Telefono de contacto: " . $telefono . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\\n";
$mensaje .= "Enviado el: " . date('d/m/Y' , time());

$para = 'isaihernandez468@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:contact.html");
?>