<?php
$destinatario='pc14046@ues.edu.sv';
$nombre=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$header="Service Request";
$mensajeCompleto=$message . "\n Sincerely: " . $nombre;
mail($destinatario, $message, $mensajeCompleto,$header);
echo "<script> alert ('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
