<?php
//Conexion a la base de datos

$conexion = new mysqli("localhost", "root", "", "sistema_clientes");

// Verificar la conexión

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

//captura de datos del formulario

$nombre = $_POST['Nombre']; 
$correo = $_POST['Correo']; 
$telefono= $_POST['Telefono'];
//Insertar los datos en la base de datos

$sql = "INSERT INTO clientes(Nombre, Correo, Telefono) VALUES ('$nombre','$correo','$telefono')";
if ($conexion->query($sql) === TRUE) {
    echo "Cliente Agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}

$conexion->close();
?>