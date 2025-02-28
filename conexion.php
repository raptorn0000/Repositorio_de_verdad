<?php
// Datos de conexión
$serverName = "localhost";
$connectionOptions = [
    "Database" => "webb",
    "UID" => "tu_usuario_sqlserver",
    "PWD" => "tu_contraseña_sqlserver",
    "CharacterSet" => "UTF-8"
];

// Conexión a SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
