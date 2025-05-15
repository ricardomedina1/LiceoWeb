<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="guardar_solicitud.php" method="POST">
        <h2>Queremos Escucharte</h2><br>
        <section class="Fila1">
            <input type="text" name="Nombre" placeholder="Nombre" required><br>
            <input type="email" name="Email" placeholder="Email" required><br>
            </section>
            <section class="Fila2">
                <input type="text" name="Telefono" placeholder="Telefono" required><br>
                <input type="text" name="Ciudad" placeholder="Ciudad" required><br>
            </section>
        <textarea name="Solicitud" placeholder="Por faovr ingrese mas datos sobre su solicitud" rows="10"required></textarea><br>
        <button type="submit" class="btn_enviar">Enviar</button><br>
    </form>
</body>
</html>