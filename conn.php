<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Crea una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprueba la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
