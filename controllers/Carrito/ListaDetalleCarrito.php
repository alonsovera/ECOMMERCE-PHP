<?php
include('../../administrador/config/bd.php');

$carrito_id = $_POST['userCarrito'];

$conn = conectar();

$sql = "SELECT dc.pkDetalleCarrito, p.Producto, p.Descripcion, p.Imagen, dc.cCantidad, p.Precio, p.Stock
        FROM detallecarrito dc
        JOIN producto p ON dc.fkProducto = p.pkProducto
        WHERE dc.fkCarrito = '$carrito_id'";

$result = mysqli_query($conn, $sql);

$valores = "";
while ($row = mysqli_fetch_assoc($result)) {
    $subtotal = $row['cCantidad'] * $row['Precio'];
    $disableDecrement = ($row['cCantidad'] == 1) ? 'disabled' : '';
    $disableIncrement = ($row['cCantidad'] >= $row['Stock']) ? 'disabled' : ''; 

    $valores .= '<tr>'.
                    '<td><img src=".././img/'.$row['Imagen'].'" alt="Producto" style="width:50px;"></td>'.
                    '<td>'.$row['Producto'].'</td>'.
                    '<td>'.$row['Descripcion'].'</td>'.
                    '<td>'.
                        '<button onclick="decrementarCantidad('.$row['pkDetalleCarrito'].')" '.$disableDecrement.'>-</button>'.
                        ' '.$row['cCantidad'].' '.
                        '<button onclick="incrementarCantidad('.$row['pkDetalleCarrito'].')" '.$disableIncrement.'>+</button>'.
                    '</td>'.
                    '<td>S/ '.$row['Precio'].'</td>'.
                    '<td>S/ '.$subtotal.'</td>'.
                    '<td><button onclick="eliminarProductoDelCarrito('.$row['pkDetalleCarrito'].')">Eliminar</button></td>'.
                '</tr>';
}

desconectar($conn);

if (empty($valores)) {
    echo "empty";  
} else {
    echo $valores;  
}
?>
