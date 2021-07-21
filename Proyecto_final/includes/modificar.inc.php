<?php

if(isset($_POST["submit"])){ 
   
    $id =  $_POST["id"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["uid"];
    $contrasena = $_POST["contrasena"];

    require_once 'dbh.inc.php';

    mysql_query("UPDATE usuarios SET usuariosNombre = '$nombre', usuariosEmail = '$correo', usuariosUid = '$usuario', usuariosContrasena = '$contrasena'
    WHERE usuariosId = '$id'" );
   
    header("location: ../perfil.php?error=ninguno"); /* Si aparece este mensaje quiere decir que el registro salio bien */
    exit();

}   

else{
    header("location: ../perfil.php"); /* Si el usuario intenta entrar a este php va a ser redirigido*/
    exit();
    
}

