<?php
include('conexion.php');
if (!isset($_SESSION['correo'])) {
    echo '<script>window.location="./"</script>';
}
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "DELETE FROM entradas WHERE id = '$id'");
echo '<script>window.location="./"</script>';
?>