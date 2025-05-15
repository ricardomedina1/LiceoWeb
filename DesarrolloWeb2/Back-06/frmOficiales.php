<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Oficiales</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="frmEstudiantes.php">Formulario de Estudiantes</a></li>
                <li><a href="frmDocentes.php">Formulario de Docentes</a></li>
                <li><a href="frmGrados.php">Formulario de Grados</a></li>
                <li><a href="frmOficiales.php">Formulario de Oficiales</a></li>
                <li><a href="frmPadres.php">Formulario de Padres</a></li>
                <li><a href="frmAdministrativo.php">Formulario de Personal Administrativo</a></li>
                <li><a href="frmServicio.php">Formulario de Servicio</a></li>
            </ul>
        </nav>
    </header>
    <h1>
        Formulario de Oficiales
    </h1>
    <form action="">
        <label for="id">ID:
            <input type="text" id="id" name="id" placeholder="Ingrese su ID" required>
        </label>
        <label for="nombre">Nombre:
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
        </label>
        <label for="apellido">Apellido:
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
        </label>
        <label for="rango">Rango:
            <input type="text" id="rango" name="rango" placeholder="Ingrese su rango" required>
        </label>
        <label for="telefono">Teléfono:
            <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su teléfono" required>
        </label>
        <label for="email">Email:
            <input type="email" id="email" name="email" placeholder="Ingrese su email" required>
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>