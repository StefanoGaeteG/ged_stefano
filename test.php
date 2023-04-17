<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";
// Conectarse a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

// Ejecutar la consulta
$resultado = mysqli_query($conexion, "SELECT * FROM `marca` ");

// Verificar si hay resultados
if (mysqli_num_rows($resultado) > 0) {
    // Recorrer los resultados y mostrarlos en una tabla
    //echo "";
    while ($fila = mysqli_fetch_assoc($resultado)) { 
       // echo "'" . $fila["NOMBRE"] . "' : '" . $fila["IMG_RUTA"] . "',";
       echo '"' . $fila["NOMBRE"] . '" : ' . "'" . $fila["IMG_RUTA"] . "' ," ;
    }
    //echo "";
} else {
    echo "No se encontraron resultados.";
}



// Cerrar la conexión
mysqli_close($conexion);
?>
