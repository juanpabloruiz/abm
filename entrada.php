<?php
include('administracion/conexion.php');
$direccion = $_GET['direccion'];
$consulta = mysqli_query($conexion, "SELECT * FROM entradas WHERE direccion = '$direccion'");
$campo = mysqli_fetch_array($consulta);
?>
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
        <h1>Título</h1>
        <h2>Subtítulo</h2>
    </header>
    <main>
        <article>
            <h3><?php echo $campo['titulo']; ?></h3>
            <?php echo $campo['modificado']; ?>
            <img src="fotos/<?php echo $campo['foto']; ?>" alt="Foto" width="300">
            <p><?php echo $campo['contenido']; ?></p>
        </article>       
    </main>
    <footer>
        Pié de página &copy <?php echo date('Y'); ?>
    </footer>
</body>
</html>