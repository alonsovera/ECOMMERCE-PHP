<?php
include('../../administrador/config/bd.php');

$conn = conectar();

$sql = "SELECT p.Producto, SUM(dv.cCantidad) AS TotalCantidad, p.Precio, SUM(dv.cCantidad * p.Precio) AS Subtotal
        FROM detalleventa dv
        JOIN producto p ON dv.fkProducto = p.pkProducto
        GROUP BY p.Producto, p.Precio";

$result = mysqli_query($conn, $sql);

$detalleVentas = "";
while ($row = mysqli_fetch_assoc($result)) {
    $detalleVentas .= '<tr>'.
                          '<td>'.$row['Producto'].'</td>'.
                          '<td>'.$row['TotalCantidad'].'</td>'.
                          '<td>S/ '.$row['Precio'].'</td>'.
                          '<td>S/ '.$row['Subtotal'].'</td>'.
                      '</tr>';
}

desconectar($conn); 

echo (empty($detalleVentas) ? "empty" : $detalleVentas);
?>
