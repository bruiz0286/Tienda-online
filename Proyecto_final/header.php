<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script> /* Script simple de js para despliegue del nav*/
    $(function() {
    
    $(".toggle").on("click",function(){
        if($(".item").hasClass("active")){
            $(".item").removeClass("active");
        }
        else{
            $(".item").addClass("active");
        }
    })
    });
    </script>
    

</head>
<body>
    <header class="header">
        <nav>
            <ul class="menu">
                <li class="logo"><a href="index.php">Tienda Online</a></li>
                <li class="item"><a href="nosotros.php">Nosotros</a></li>
                <li class="item"><a href="producto.php">Productos</a></li>
                <li class="item"><a href="contacto.php">Contacto</a></li>
               
               <?php
                if (isset($_SESSION["usuariosId"])){
                    echo "<p href='#' class='item usuario'><i class='fa fa-user' aria-hidden='true'></i>". $_SESSION["usuariosUid"] ."</p>";
                    echo "<li class='item button'><a href='includes/logout.inc.php'>Cerrar sesion</a></li>";
                }

                else{
                    echo"<li class='item button'><a href='login.php'>Iniciar sesion</a></li>";
                    echo"<li class='item button secundario'><a href='registro.php'>Registrarse</a></li>";
                }
                ?>
                <li class="toggle"><span class="barras"></span></li>
            </ul>
        </nav>
</header>
