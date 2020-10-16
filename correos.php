<?php 
    $destinatario = 'bastokcontenidos@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto =  $_POST['asunto'];
    $email = $_POST['email'];
    $telefono =  $_POST['telefono'];
    $mensaje =  $_POST['mensaje'];

    $header = "Consulta en página web";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . $telefono;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>