<?php 
include'header.php';

?>

<form class="form" action="includes/modificar.inc.php" method="POST">
    
    <h1 class="form-h1">Modificar Perfil</h1>
        <div class="cont">
        
        <div class="input-contenedor">
                <input type="text" placeholder="ID de usuario a modificar" name="id">  
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Nuevo Nombre" name="nombre">  
            </div>
            
            <div class="input-contenedor">
                <input type="text" placeholder="Nuevo Correo" name="correo">   
            </div>
            
            <div class="input-contenedor">
                <input type="text" placeholder="Nuevo Usuario" name="uid">
            </div>

            <div class="input-contenedor">
                <input type="password" placeholder="Nueva Contraseña" name="contrasena">
            </div>

            <button type="submit" name="submit" class="btn">Modificar</button>

</form>
