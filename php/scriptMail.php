<?php

$nombre = $_POST['nombre'];
$correo_remitente = $_POST['correo_remitente'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$correo_de = 'jalvarez@dieselomt.cl';
$correo_asunto = "Contacto Web";
$correo_cuerpo = "Nombre: $nombre.\n".
                 "Correo: $correo_remitente.\n".
                 "Asunto: $asunto.\n".
                 "Mensaje: $mensaje .\n".;
$para = 'wolowizard720@gmail.com';
$cabeceras = "De: $correo_de \r\n";
$cabeceras .= "Responder a : $correo_remitente \r\n";

mail($para,$asunto,$correo_cuerpo,$cabeceras);

header("Location: contacto.html");







?>