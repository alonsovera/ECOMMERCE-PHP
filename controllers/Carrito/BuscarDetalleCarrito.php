<?php
include('../../administrador/config/bd.php');

$id = $_POST['userCarrito'];

$conn = conectar();

$sql = "SELECT COUNT(*) AS cantidad FROM detallecarrito WHERE fkCarrito = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo $row['cantidad'];
} else {
    echo "Error en la consulta: " . mysqli_error($conn);
}

desconectar($conn);
?>
