<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Personal Administrativo</title>
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
        Formulario de Personal Administrativo
    </h1>
    <form action="">
        <label for="">ID:
            <input type="text" name="id" placeholder="Ingrese su ID" required>
        </label>
        <label for="">Nombre:
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
        </label>
        <label for="">Apellido:
            <input type="text" name="apellido" placeholder="Ingrese su apellido" required>
        </label>
        <label for="">Cargo:
            <input type="text" name="cargo" placeholder="Ingrese su cargo" required>
        </label>
        <label for="">Departamento:
            <input type="text" name="departamento" placeholder="Ingrese su departamento" required>
        </label>
        <label for="">Teléfono:
            <input type="tel" name="telefono" placeholder="Ingrese su teléfono" required>
        </label>
        <label for="">Email:
            <input type="email" name="email" placeholder="Ingrese su email" required>
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>