<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="guardar_registro.php" method="POST">
        <section class="Registro">
            <h2>Formulario de Registro Vehicular</h2><br>
        </section>
        <input type="text" name="Placa" placeholder="Inserte Su Placa" required><br>
        <input type="text" name="Marca" placeholder="Marca del Vehiculo" required><br>
        <input type="text" name="Modelo" placeholder="Modelo Del Vehiculo" required><br>
        <input type="text" name="Anio" placeholder="Anio Del Vehiculo" required><br>
        <input type="text" name="Color" placeholder="Color del Vehiculo" required><br>
        <input type="text" name="Nombre_Propietario" placeholder="Nombre del Propietario" required><br>
        <input type="text" name="Telefono_Contacto" placeholder="Telefono de Contacto" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>

</html>