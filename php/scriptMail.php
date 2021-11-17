<?php

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$correo_remitente = $_POST['correo_remitente'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(isset($_POST['submit']))
{
    if(!empty($_POST['eleccion']))
    {
        foreach($_POST['eleccion'] as $valor)
        {
         $seleccion = $_POST['valor'];   
        }
    }
}




$correo_de = 'jalvarez@dieselomt.cl';
$correo_asunto = "Contacto Web";
$correo_cuerpo = "Nombre: $nombre.\n".
                 "Correo: $correo_remitente.\n".
                 "Asunto: $asunto.\n".
                 "Telefono: $telefono.\n".
                 "Tipo de Contacto: $seleccion .\n".
                 "Mensaje: $mensaje .\n".;
$para = 'wolowizard720@gmail.com';
$cabeceras = "De: $correo_de \r\n";
$cabeceras .= "Responder a : $correo_remitente \r\n";

mail($para,$asunto,$correo_cuerpo,$cabeceras);

header("Location: contacto.html");







?>