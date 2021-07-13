<?php

if(isset($_POST["submit"])){ /* Si hay un name="submit" entonces quiere decir que entramos a la pag correcta (registro.php)*/ 
   
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["uid"];
    $contrasena = $_POST["contrasena"];
    $contrasenavrf = $_POST["contrasenavrf"];

    require_once 'dbh.inc.php';
    require_once 'funciones.inc.php';

    /* Funciones (error handlers)*/
    if(inputVacioRegistro($nombre,$correo,$usuario,$contrasena,$contrasenavrf) !== false){ /* No igual a false = error */
        header("location: ../registro.php?error=inputvacio");
        exit();
    }

    if(uidInvalido($usuario) !== false){ 
        header("location: ../registro.php?error=usuarioinvalido");
        exit();
    }
    
    if(correoInvalido($correo) !== false){ 
        header("location: ../registro.php?error=correoinvalido");
        exit();
    }

    if(pwdMatch($contrasena,$contrasenavrf) !== false){ /* No igual a false = error */
        header("location: ../registro.php?error=contrasenasnocoinciden");
        exit();
    }

    if(uidExiste($conn, $usuario, $correo) !== false){ /* No igual a false = error */
        header("location: ../registro.php?error=usuarioexistente");
        exit();
    }

    crearUsuario($conn, $nombre, $correo, $usuario, $contrasena);
}


else{
    header("location: ../registro.php"); /* Si el usuario intenta entrar a este php va a ser redirigido*/
    exit();
    
}