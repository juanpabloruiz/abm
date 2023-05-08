<?php
include('conexion.php');
if (!isset($_SESSION['correo'])) {
    echo '<script>window.location="./"</script>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <nav>
        <a href="">Inicio</a>
        <a href="salir.php">Salir</a>
    </nav>
    <h1>Panel</h1>
    <form method="post" action="insertar.php">
        <input type="text" name="titulo" placeholder="Título">
        <input type="file" name="foto">
        <textarea name="contenido" cols="30" rows="10" placeholder="Contenido..."></textarea>
        <input type="submit" name="insertar" value="Insertar">
    </form>
    <hr>
    <table>
        <tr>
            <th>Título</th>
            <th>Creado</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $consulta = mysqli_query($conexion, "SELECT * FROM entradas ORDER BY creado DESC");
        while ($campo = mysqli_fetch_array($consulta)) {
        ?>
            <tr>
                <td><?php echo $campo['titulo'];?></td>
                <td><?php echo $campo['creado'];?></td>
                <td><a href="eliminar.php?id=<?php echo $campo['id'];?>" onclick="return confirm('¿Está seguro de borrar el ID <?php echo $campo['id'];?>?')">Eliminar</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>