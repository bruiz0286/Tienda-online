<?php 
include'header.php';

?>

    <main class="contenedor">
        <h1>Compra online</h1>

        <div class="camisa">
            <img class="camisa__imagen" src="img/producto.jpg" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil tenetur nesciunt id, 
                    quasi aliquam eligendi dolores quidem ducimus vel repellendus atque quisquam, magnam 
                    vero, maxime odit vitae nisi quos saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil tenetur nesciunt id.
                    </p>
                    <form class="formulario" action="includes/producto.inc.php" method="POST">
                        <select class="formulario__producto" name="producto">
                            <option disabled selected>-- Seleccionar Producto --</option>
                            <option>Cazadora doble faz</option>
                            <option>Cazadora acolchada capucha</option>
                            <option>Sobrecamisa doble faz con lana</option>
                            <option>Cazadora bomber</option>
                            <option>Cazadora estructura acolchada</option>
                            <option>Cazadora acolchada efecto piel</option>
                            <option>Sobrecamisa doble faz con lana</option>
                            <option>Cazadora bomber</option>
                            <option>Cazadora estructura acolchada</option>
                            <option>Cazadora acolchada efecto piel</option>
                            <option>Cazadora acolchada capucha</option>
                            <option>Blazer conjunto cinzato confort</option>
                            <option>Blazer conjunto cuadros</option>
                            <option>Blazer cruzada conjunto estructura</option>
                            <option>Blazer cruzada relaxed</option>
                            <option>Blazer conjunto estructura cuadros (negro)</option>
                            <option>Blazer conjunto estructura cuadros (gris)</option>
                            <option>Blazer estructura lana</option>
                        </select>    
                    <select class="formulario__campo" name="talle">
                        <option disabled selected>-- Seleccionar Talle --</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" max="10" name="cantidad" >
                    <button class="formulario__submit" type="submit" name="submit">Agregar al carrito</button>
                    <?php
                if(isset($_GET["error"])){ /*Si hay un "error" en el url de la pagina voy a darle un mensaje de error */
                    if($_GET["error"] == "inputvacio"){
                        echo"<p class='error'>Llena todos los campos</p>";
                    
                    }               
                }

            ?>
                </form>
            </div>
        </div>
    </main>

<?php 
include'footer.php'; /* Para incluirlo en todas las paginas */

?>
    
</body>
</html>