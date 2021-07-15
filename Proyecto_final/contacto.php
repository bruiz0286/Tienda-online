<?php 
include'header.php';

?>

    <main class="contenedor">
        <h1>Manda tu giftcard!</h1>
        <section>
            <form class="formulario--contacto" action="includes/contactoform.inc.php" method="POST">
                <fieldset>                   
                <div class="contenedor_campos">
                    <div class="campo">
                        <label>Nombre Destinatario</label>
                        <input class="input_text" type="text" placeholder="Nombre" name="nombre">
                    </div>  

                    <div class="campo">
                        <label>Telefono De contacto</label>
                        <input class="input_text" type="text" placeholder="Telefono de contacto" name="telefono">
                    </div>

                    <div class="campo">
                        <label>Direccion</label>
                        <input class="input_text" type="text" placeholder="Direccion Destinatario" name="direccion">
                    </div>

                    <div class="campo">
                        <label>Monto</label>
                        <select class="input_text" type="email" name="monto">
                            <option disabled selected>-- Seleccionar Monto --</option>
                            <option>$3000</option>
                            <option>$6000</option>
                            <option>$10000</option>
                            <option>$20000</option>
                        </select>
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

