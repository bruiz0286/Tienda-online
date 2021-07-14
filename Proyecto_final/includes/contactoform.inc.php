<?php


if(isset($_POST["submit"])){ 
   
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $asunto = $_POST["asunto"];
   $mensaje= $_POST["mensaje"];

   $mailTo = "bauruiza@gmail.com";
   $headers = "De: " .$correo;
   $txt = "Recibiste un mail de " .$nombre.".\n\n".$mensaje;

   mail($mailTo, $nombre, $asunto, $headers);
   header("location: ../contacto.php?mensajeenviado");
   
    
}
else{
    header("location: ../contacto.php"); /* Si el usuario intenta entrar a este php va a ser redirigido*/
    exit();
    
}