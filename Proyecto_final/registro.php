<?php 
include'header.php';

?>

<div class="login-register">
 <form class="form" action="includes/registro.inc.php" method="POST">
    
    <h1 class="form-h1">Registrate</h1>
        <div class="cont">
        
            <div class="input-contenedor">
                <input type="text" placeholder="Nombre Completo" name="nombre">  
            </div>
            
            <div class="input-contenedor">
                <input type="text" placeholder="Correo" name="correo">   
            </div>
            
            <div class="input-contenedor">
                <input type="text" placeholder="Usuario" name="uid">
            </div>

            <div class="input-contenedor">
                <input type="password" placeholder="Contraseña" name="contrasena">
            </div>

            <div class="input-contenedor">
                <input type="password" placeholder="Repetir Contraseña" name="contrasenavrf">
            </div>

            <button type="submit" name="submit" class="btn">Registrate</button>

            <?php
                if(isset($_GET["error"])){ /*Si hay un "error" en el url de la pagina voy a darle un mensaje de error */
                    if($_GET["error"] == "inputvacio"){
                        echo"<p class='error'>Llena todos los campos</p>";
                    }
                    else if($_GET["error"] == "usuarioinvalido"){
                        echo"<p class='error'>Elegir un usuario apropiado</p>";
                    }
                    else if($_GET["error"] == "correoinvalido"){
                        echo"<p class='error'>Elegir un correo apropiado</p>";
                    }
                    else if($_GET["error"] == "contrasenasnocoinciden"){
                        echo"<p class='error'>Las contraseñas no coinciden</p>";
                    }
                    else if($_GET["error"] == "usuarioexistente"){
                        echo"<p class='error'>El usuario ya existe</p>";
                    }
                    else if($_GET["error"] == "stmtfallo"){
                        echo"<p class='error'>Algo salio mal, intenta de nuevo</p>";
                    }
                    else if($_GET["error"] == "ninguno"){
                        echo"<p class='exito'>Te registraste correctamente</p>";
                    }
                }

            ?>
            
            <p class="btn-p">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p class="btn-p">¿Ya tienes una cuenta?<a class="link" href="login.php"> Iniciar Sesion</a></p>

            
        </div>
    </div>    
</form>
</body>
</html>

