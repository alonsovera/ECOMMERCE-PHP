<?php
include('../../administrador/config/bd.php');

$userCarrito = $_POST['userCarrito']; 
$conn = conectar();

$sql = "SELECT SUM(cCantidad * Precio) AS Total FROM detallecarrito 
        JOIN producto ON detallecarrito.fkProducto = producto.pkProducto 
        WHERE fkCarrito = '$userCarrito'";

$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    echo $row['Total'] ?: '0'; 
} else {
    echo '0';  
}

desconectar($conn);
?>