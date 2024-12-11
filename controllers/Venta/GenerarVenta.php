<?php
session_start();
include('../../administrador/config/bd.php');

$userId = $_POST['clienteId'];
$userCarrito = $_POST['userCarrito'];

$conn = conectar();

$fecha = date('Y-m-d H:i:s');
$sqlVenta = "INSERT INTO venta (fFechaVenta, cTotal, fkCliente) VALUES ('$fecha', 0, '$userId')";
mysqli_query($conn, $sqlVenta);
$ventaId = mysqli_insert_id($conn);

$sqlCarrito = "SELECT fkProducto, cCantidad, (cCantidad * Precio) AS Total FROM detallecarrito JOIN producto ON fkProducto = pkProducto WHERE fkCarrito = '$userCarrito'";
$resultCarrito = mysqli_query($conn, $sqlCarrito);

$totalVenta = 0;
while ($row = mysqli_fetch_assoc($resultCarrito)) {
    $fkProducto = $row['fkProducto'];
    $cCantidad = $row['cCantidad'];
    $subtotal = $row['Total'];
    $totalVenta += $subtotal;

    $sqlDetalleVenta = "INSERT INTO detalleventa (fkVenta, fkProducto, cCantidad) VALUES ('$ventaId', '$fkProducto', '$cCantidad')";
    mysqli_query($conn, $sqlDetalleVenta);

    $sqlActualizarStock = "UPDATE producto SET Stock = Stock - $cCantidad WHERE pkProducto = $fkProducto";
    mysqli_query($conn, $sqlActualizarStock);
}

$sqlUpdateVenta = "UPDATE venta SET cTotal = '$totalVenta' WHERE pkVenta = '$ventaId'";
mysqli_query($conn, $sqlUpdateVenta);

$sqlLimpiarCarrito = "DELETE FROM detallecarrito WHERE fkCarrito = '$userCarrito'";
mysqli_query($conn, $sqlLimpiarCarrito);

echo "Venta registrada correctamente con ID: $ventaId. El carrito ha sido limpiado. Stock actualizado.";

desconectar($conn);
?>
