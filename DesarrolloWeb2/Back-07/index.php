<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="guardar_registro.php" method="POST">
        <section class="Registro">
            <h2>Nuevo Cliente</h2><br>
        </section>
        <input type="text" name="Nombre" placeholder="Nombre" required><br>
        <input type="text" name="Correo" placeholder="Correo" required><br>
        <input type="text" name="Telefono" placeholder="Telefono" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>

</html>