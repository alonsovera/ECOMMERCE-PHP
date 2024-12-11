<?php
include('../../administrador/config/bd.php');

if(isset($_POST['pkDetalleCarrito'])) {
    $pkDetalleCarrito = $_POST['pkDetalleCarrito'];

    $conn = conectar();

    $precioQuery = "SELECT p.Precio FROM producto p 
                    JOIN detallecarrito dc ON p.pkProducto = dc.fkProducto
                    WHERE dc.pkDetalleCarrito = '$pkDetalleCarrito'";

    $precioResult = mysqli_query($conn, $precioQuery);
    if ($precioRow = mysqli_fetch_assoc($precioResult)) {
        $precioUnitario = $precioRow['Precio'];

        $updateQuery = "UPDATE detallecarrito SET cCantidad = cCantidad + 1 WHERE pkDetalleCarrito = '$pkDetalleCarrito'";
        if (mysqli_query($conn, $updateQuery)) {
            $subtotalQuery = "UPDATE detallecarrito SET cPrecio = cCantidad * '$precioUnitario' WHERE pkDetalleCarrito = '$pkDetalleCarrito'";
            if (mysqli_query($conn, $subtotalQuery)) {
                echo "Cantidad y subtotal actualizados correctamente.";
            } else {
                echo "Error al actualizar el subtotal: " . mysqli_error($conn);
            }
        } else {
            echo "Error al actualizar la cantidad: " . mysqli_error($conn);
        }
    } else {
        echo "Error al obtener el precio unitario: " . mysqli_error($conn);
    }

    desconectar($conn);
} else {
    echo "ID del detalle del carrito no proporcionado.";
}
?>
