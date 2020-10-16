<?php 
    $destinatario = 'gabrielquiroga.e@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto =  $_POST['asunto'];
    $email = $_POST['email'];
    $telefono =  $_POST['telefono'];
    $mensaje =  $_POST['mensaje'];
    
    $header = "Mensaje:";
    $mensajeCompleto = $mensaje . "\nDe: " . $nombre . "\nTel: " .  $telefono . "\nMail: " . $email;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>