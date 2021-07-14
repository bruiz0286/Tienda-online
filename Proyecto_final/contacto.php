<?php 
include'header.php';

?>

    <main class="contenedor">
        <h1>Contactanos</h1>
        <section>
            <form class="formulario--contacto" action="includes/contactoform.inc.php">
                <fieldset>
                    <legend>Contactanos llenando todos los campos</legend>
                    
                <div class="contenedor_campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input class="input_text" type="text" placeholder="Nombre" name="nombre">
                    </div>  

                    <div class="campo">
                        <label>Asunto</label>
                        <input class="input_text" type="text" placeholder="Asunto" name="asunto">
                    </div>

                    <div class="campo">
                        <label>Correo</label>
                        <input class="input_text" type="email" placeholder="Email" name="correo">
                    </div>

                    <div class="campo">
                        <label>Mensaje</label>
                        <textarea class="input_text" name="mensaje"></textarea>
                    </div>
                </div>
                    <div class="enviar">
                        <button class="boton w-100" type="submit" name="submit">Enviar</button>
                    </div>
            
                    
                </fieldset>
            </form>
        </section>
        
    </main>


<?php 
include'footer.php'; /* Para incluirlo en todas las paginas */

?>
</body>
</html>

