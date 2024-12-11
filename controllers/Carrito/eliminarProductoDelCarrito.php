<?php
include('../../administrador/config/bd.php');

$id = $_POST['pkDetalleCarrito']; 
$conn = conectar();

$sql = "SELECT p.Producto, d.cPrecio
        FROM detallecarrito d
        JOIN producto p ON d.fkProducto = p.pkProducto
        WHERE d.pkDetalleCarrito = $id";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $producto = $row['Producto'];
    $precio = $row['cPrecio'];

    $sqlDelete = "DELETE FROM detallecarrito WHERE pkDetalleCarrito = $id";
    $resultDelete = mysqli_query($conn, $sqlDelete);

    if ($resultDelete) {
        $msg = "El detalle '$producto', con precio S/ $precio, ha sido eliminado correctamente.";
    } else {
        $msg = "Error al eliminar el detalle del carrito: " . mysqli_error($conn);
    }
} else {
    $msg = "No se encontró el detalle con ID $id.";
}

echo $msg;
desconectar($conn);
?>
