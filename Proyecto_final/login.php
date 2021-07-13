<?php 
include'header.php';

?>

<div class="login-register">
    <form class="form" action="includes/login.inc.php" method="POST"> 
    
    <h1 class="form-h1">Log In</h1>
     <div class="cont">
     
         
        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Correo / Usuario" name="uid">   
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="contrasena">
        </div>


        <button type="submit" name="submit" class="btn">Log in</button>
         <p class="btn-p">¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>

         <?php
    if(isset($_GET["error"])){ /*Si hay un "error" en el url de la pagina voy a darle un mensaje de error */
        if($_GET["error"] == "inputvacio"){
            echo"<p class='error'>Llena todos los campos</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo"<p class='error'>El usuario o correo y contraseña no coinciden</p>";
        }  
    }

?>
     </div>
</div>
    </form>

</body>
</html>

