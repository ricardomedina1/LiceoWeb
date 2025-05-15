<?php
//Conexion a la base de datos

$conexion = new mysqli("localhost", "root", "", "formulario_contacto");

// Verificar la conexión

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

//captura de datos del formulario

$nombre = $_POST['Nombre']; 
$correo = $_POST['Correo'];
$mensaje = $_POST['Mensaje'];

//Insertar los datos en la base de datos

$sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";
if ($conexion->query($sql) === TRUE) {
    echo "Contacto guardado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}

$conexion->close();
?>