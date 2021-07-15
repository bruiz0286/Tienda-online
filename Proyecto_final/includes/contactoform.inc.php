<?php


if(isset($_POST["submit"])){ 
   
   $nombre=$_POST["nombre"];
   $telefono=$_POST["telefono"];
   $direccion=$_POST["direccion"];
   $monto=$_POST["monto"];

   require_once 'dbh.inc.php';
   require_once 'funciones.inc.php';

   $sql = "INSERT INTO giftcard (giftcardNombre,giftcardTelefono,giftcardDireccion,giftcardMonto) VALUES(?,?,?,?)";
   $stmt = mysqli_stmt_init($conn); 

   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../contacto.php?error=stmtfallo"); 
       exit();
   }


   mysqli_stmt_bind_param($stmt,"ssss",$nombre,$telefono,$direccion,$monto); /*La contraseña pasa a ser ilegible para ser alamcenada en la bd */
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location: ../contacto.php?error=ninguno"); /* Si aparece este mensaje quiere decir que el registro salio bien */
   exit();
}
else{
    header("location: ../contacto.php"); /* Si el usuario intenta entrar a este php va a ser redirigido*/
    exit();
    
}