<?php

if(isset($_POST["submit"])){ /* Si hay un name="submit" entonces quiere decir que entramos a la pag correcta (registro.php)*/ 
    
    $usuario = $_POST["uid"];
    $contrasena = $_POST["contrasena"];
    
    require_once 'dbh.inc.php';
    require_once 'funciones.inc.php';

    if(inputVacioLogin($usuario,$contrasena) !== false){ /* No igual a false = error */
        header("location: ../login.php?error=inputvacio");
        exit();
    }

    loginUser($conn,$usuario,$contrasena);

}

else{
    header("location: ../login.php");
    exit();
}