<?php
// Definir parámetros de conexión
define('DB_SERVER', 'localhost');  // Usar solo 'localhost', el puerto se especifica en la configuración del servidor
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'proyecto_pds');

// Establecer la conexión
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Comprobar si hay errores en la conexión
if (!$db) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
