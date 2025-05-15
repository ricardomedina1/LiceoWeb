<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="guardar_datos.php" method="POST">
        <h2>Tabla Agenda</h2><br>
        <input type="text" name="Id" placeholder="Inserte ID" required><br>
        <input type="text" name="Nombre" placeholder="Tu Nombre" required><br>
        <input type="text" name="Apellido" placeholder="Tu Apellido" required><br>
        <input type="text" name="Genero" placeholder=" Tu Genero" required><br>
        <input type="text" name="Telefono" placeholder=" Tu Telefono" required><br>
        <input type="email" name="Correo" placeholder=" Tu Correo" required><br>
        <input type="text" name="Direccion" placeholder=" Tu Direccion" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>

</html>