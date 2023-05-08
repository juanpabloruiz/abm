<?php
include('conexion.php');
if (isset($_SESSION['correo'])) {
    echo '<script>window.location="panel.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorización</title>
</head>
<body>
    <form method="post" action="ingreso.php">
        <input type="email" name="correo" placeholder="Correo electrónico">
        <input type="password" name="clave" placeholder="Contraseña">
        <input type="submit" name="ingresar" value="Ingresar">
    </form>
</body>
</html>
