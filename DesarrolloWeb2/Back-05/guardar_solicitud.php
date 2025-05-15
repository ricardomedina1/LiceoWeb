<?php
//Conexion a la base de datos

$conexion = new mysqli("localhost", "root", "", "tienda");

// Verificar la conexión

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

//captura de datos del formulario

$Nombre = $_POST['Nombre']; 
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Ciudad = $_POST['Ciudad'];
$Solicitud = $_POST['Solicitud'];

//Insertar los datos en la base de datos

$sql = "INSERT INTO registros_tienda (Nombre, Telefono,  Email, Ciudad, Solicitud) VALUES ('$Nombre','$Telefono','$Email', '$Ciudad', '$Solicitud')";
if ($conexion->query($sql) === TRUE) {
    echo "Solicitud Enviada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}

$conexion->close();
?>