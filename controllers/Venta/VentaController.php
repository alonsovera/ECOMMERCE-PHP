<?php
include('../../administrador/config/bd.php');

$conn = conectar();
$sql = "SELECT DATE(fFechaVenta) as fecha, SUM(cTotal) as total FROM venta GROUP BY DATE(fFechaVenta) ORDER BY fecha ASC";
$result = mysqli_query($conn, $sql);

$ventas = [];
while($row = mysqli_fetch_assoc($result)) {
    $ventas[] = array(
        'fecha' => $row['fecha'],
        'total' => $row['total']
    );
}

mysqli_close($conn);

$datosParaGrafico = array_map(function($venta) {
    return [
        'fecha' => $venta['fecha'],
        'total' => (float) $venta['total']
    ];
}, $ventas);

header('Content-Type: application/json');
echo json_encode($datosParaGrafico);
?>
