<?php
function ObtenerClientes() {
    $conexion = new mysqli("localhost", "root", "", "sistema_clientes");
    if ($conexion->connect_error) {
        die("Error de conexion: " . $conexion->connect_error);
    }
    $resultado = $conexion->query("SELECT * FROM clientes");
    return $resultado;
}
?>