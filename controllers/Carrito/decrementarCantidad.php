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

        $cantidadQuery = "SELECT cCantidad FROM detallecarrito WHERE pkDetalleCarrito = '$pkDetalleCarrito'";
        $cantidadResult = mysqli_query($conn, $cantidadQuery);
        if ($cantidadRow = mysqli_fetch_assoc($cantidadResult)) {
            if ($cantidadRow['cCantidad'] > 1) {
                $updateQuery = "UPDATE detallecarrito SET cCantidad = cCantidad - 1 WHERE pkDetalleCarrito = '$pkDetalleCarrito'";
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
                echo "La cantidad no puede ser menor de 1.";
            }
        } else {
            echo "Error al obtener la cantidad actual: " . mysqli_error($conn);
        }
    } else {
        echo "Error al obtener el precio unitario: " . mysqli_error($conn);
    }

    desconectar($conn);
} else {
    echo "ID del detalle del carrito no proporcionado.";
}
?>
