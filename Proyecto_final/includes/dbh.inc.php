<!-- Database Handler -->

<?php

/*Variables con datos de la base de datos */

$serverName= "localhost";  
$dbUsername = "root";
$dbPassword = "";
$dbName = "tienda-online";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){  /* Si la conexion falla (!) entonces.. */
    die("Conexion fallida" . mysqli_connect_error());
}