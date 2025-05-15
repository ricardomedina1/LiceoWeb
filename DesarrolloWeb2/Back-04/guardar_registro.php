<?php
//Conexion a la base de datos

$conexion = new mysqli("localhost", "root", "", "tasa_vehicular");

// Verificar la conexión

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

//captura de datos del formulario

$Placa = $_POST['Placa']; 
$Marca = $_POST['Marca']; 
$Modelo= $_POST['Modelo'];
$Anio = $_POST['Anio'];
$Color = $_POST['Color'];
$Nombre_Propietario = $_POST['Nombre_Propietario'];
$Telefono_Contacto = $_POST['Telefono_Contacto'];

//Insertar los datos en la base de datos

$sql = "INSERT INTO registro_vehicular (Placa, Marca, Modelo, Anio, Color, Nombre_Propietario, Telefono_Contacto) VALUES ('$Placa','$Marca','$Modelo','$Anio','$Color','$Nombre_Propietario', '$Telefono_Contacto')";
if ($conexion->query($sql) === TRUE) {
    echo "Registro Agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;

}

$conexion->close();
?>