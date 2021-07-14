<?php


/* FUNCIONES DE PAGINA REGISTRO */
function inputVacioRegistro($nombre,$correo,$usuario,$contrasena,$contrasenavrf){
    $resultado;
    
    if(empty($nombre) || empty($correo) || empty($usuario) || empty($contrasena) || empty($contrasenavrf)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function uidInvalido($usuario){
    $resultado;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $usuario)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function correoInvalido($correo){
    $resultado;
    
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function pwdMatch($contrasena,$contrasenavrf){
    $resultado;
    
    if($contrasena !== $contrasenavrf){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function uidExiste($conn, $usuario, $correo){
    
    $sql = "SELECT * FROM usuarios WHERE usuariosUid = ? OR usuariosEmail = ?;";
    $stmt = mysqli_stmt_init($conn); /* Prepared statement para hacer mas segura la bd y que no se rompa el codigo */

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registro.php?error=stmtfallo"); 
    exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$usuario,$correo);
    mysqli_stmt_execute($stmt);

    $resultadoData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultadoData)){
        return $row;
    }

    else{
        $resultado = false;
        return $resultado;
    }

    mysqli_stmt_close($stmt);
   
}

function crearUsuario($conn, $nombre, $correo, $usuario, $contrasena){
    
    $sql = "INSERT INTO usuarios (usuariosNombre,usuariosEmail,usuariosUid,usuariosContrasena) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn); /* Prepared statement para hacer mas segura la bd y que no se rompa el codigo */

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registro.php?error=stmtfallo"); 
        exit();
    }

    /* Hacer la contraseña ilegible para que sea mas segura */
    $hashedPwd = password_hash($contrasena, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$nombre,$correo,$usuario,$hashedPwd); /*La contraseña pasa a ser ilegible para ser alamcenada en la bd */
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registro.php?error=ninguno"); /* Si aparece este mensaje quiere decir que el registro salio bien */
    exit();
}

function inputVacioLogin($usuario,$contrasena){
    $resultado;
    
    if(empty($usuario) || empty($contrasena)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function loginUser($conn,$usuario,$contrasena){
    $uidExiste = uidExiste($conn, $usuario, $usuario);

    if($uidExiste === false){
        header("location: ../login.php?error=wronglogin"); 
        exit(); 
    }

    $Pwdhashed = $uidExiste["usuariosContrasena"];
    $checkPwd = password_verify($contrasena,$Pwdhashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin"); 
        exit(); 
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["usuariosId"] = $uidExiste["usuariosId"];
        $_SESSION["usuariosUid"] = $uidExiste["usuariosUid"];
        header("location: ../index.php"); 
        exit();
    }
}



/* FUNCIONES DE PAGINA PRODUCTO */

/*
function inputVacioProducto($producto,$talle,$cantidad){
    $resultado;
    
    if(empty($producto) || empty($talle) || empty($cantidad))){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}
*/


