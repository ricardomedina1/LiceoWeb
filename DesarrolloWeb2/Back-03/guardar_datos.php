<?php
//Conexion a la base de datos

$conexion = new mysqli("localhost", "root", "", "tabla_agenda");

// Verificar la conexión

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

//captura de datos del formulario

$Id = $_POST['Id']; 
$Nombre = $_POST['Nombre']; 
$Apellido= $_POST['Apellido'];
$Genero = $_POST['Genero'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Direccion = $_POST['Direccion'];

//Insertar los datos en la base de datos

$sql = "INSERT INTO agenda (Id, Nombre, Apellido, Telefono, Genero, Correo, Direccion) VALUES ('$Id','$Nombre','$Apellido','$Telefono','$Genero','$Correo', '$Direccion')";
if ($conexion->query($sql) === TRUE) {
    echo "Agenda Agregada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}

$conexion->close();
?>