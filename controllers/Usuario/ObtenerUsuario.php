<?php
include('../../administrador/config/bd.php');

$userId = $_POST['userId'];
$conn = conectar();

$sql = "SELECT cNombre, cCorreo, cFoto FROM usuario WHERE pkUsuario = $userId";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $nombre = $row['cNombre'];
    $correo = $row['cCorreo'];
    $foto = $row['cFoto'] ? '../../img/fotos/' . $row['cFoto'] : '../Content/image/user-default-blanco.png';
    echo $nombre . '|' . $correo . '|' . $foto;
} else {
    echo "Error: No se encontraron datos.";
}

desconectar($conn);
?>
