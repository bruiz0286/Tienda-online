<?php 
include'header.php';

?>

    <main class="contenedor">
        <h1>Contactanos</h1>
        <section>
            <form class="formulario--contacto">
                <fieldset>
                    <legend>Contactanos llenando todos los campos</legend>
                    
                <div class="contenedor_campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input class="input_text" type="text" placeholder="Nombre">
                    </div>  

                    <div class="campo">
                        <label>Telefono</label>
                        <input class="input_text" type="tel" placeholder="Telefono">
                    </div>

                    <div class="campo">
                        <label>Correo</label>
                        <input class="input_text" type="email" placeholder="email">
                    </div>

                    <div class="campo">
                        <label>Mensaje</label>
                        <textarea class="input_text"></textarea>
                    </div>
                </div>
                    <div class="enviar">
                        <input class="boton w-100" type="submit" value="Enviar">
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