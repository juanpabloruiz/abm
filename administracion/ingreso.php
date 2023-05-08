<?php
include('conexion.php');
if (isset($_POST['ingresar'])) {
    $correo_enviado = $_POST['correo'];
    $clave_enviada = $_POST['clave'];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo_enviado'");
    $campo = mysqli_fetch_array($consulta);
    $correo = $campo['correo'];
    $clave = $campo['clave'];
    if ($correo_enviado == $correo && $clave_enviada == $clave) {
        $_SESSION['correo'] = $correo;
        echo '<script>window.location="panel.php"</script>';
    } else {
        echo '<script>window.location="./"</script>';
    }
}
?>