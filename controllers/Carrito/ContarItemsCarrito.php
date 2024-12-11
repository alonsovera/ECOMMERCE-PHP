<?php
include('../../administrador/config/bd.php');

if(isset($_POST['userCarrito'])) {
    $userCarrito = $_POST['userCarrito'];
    $conn = conectar();
    $sql = "SELECT COUNT(*) AS cantidad FROM detallecarrito WHERE fkCarrito = '$userCarrito'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    desconectar($conn);
    echo $data['cantidad'];
} else {
    echo "0";  
}
?>
