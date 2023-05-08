<?php include('administracion/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    <nav>
        <a href="">Inicio</a>
        <a href="">Contacto</a>
        <a href="administracion">Administración</a>
    </nav>
    <header>
        <a href="./">
            <h1>Título</h1>
            <h2>Subtítulo</h2>
        </a>
    </header>
    <main>
        <?php
        $consulta = mysqli_query($conexion, "SELECT * FROM entradas ORDER BY creado DESC");
        while ($campo = mysqli_fetch_array($consulta)) {
        ?>
            <a href="entrada.php?direccion=<?php echo $campo['direccion']; ?>">
                <?php echo $campo['titulo']; ?>
                <?php echo $campo['foto']; ?>
            </a>
            <hr>
        <?php
        }
        ?>
    </main>
    <footer>
        Pié de página &copy <?php echo date('Y'); ?>
    </footer>
</body>
</html>