<?php

if(isset($_POST["submit"])){ 
   
   $producto = $_POST["producto"];
   $talle = $_POST["talle"];
   $cantidad = $_POST["cantidad"];

    require_once 'dbh.inc.php';
    require_once 'funciones.inc.php';

    $sql = "INSERT INTO pedidos(pedidosProducto, pedidosTalle, pedidosCantidad) VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../producto.php?error=stmtfallo"); 
        exit();
    }


    mysqli_stmt_bind_param($stmt,"sss",$producto,$talle,$cantidad); /*La contraseña pasa a ser ilegible para ser alamcenada en la bd */
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../producto.php?error=ninguno"); /* Si aparece este mensaje quiere decir que el registro salio bien */
    exit();

}   

else{
    header("location: ../producto.php"); /* Si el usuario intenta entrar a este php va a ser redirigido*/
    exit();
    
}
