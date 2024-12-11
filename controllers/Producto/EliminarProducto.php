<?php

include('../../administrador/config/bd.php');
echo $_POST['id'];
$id = $_POST['id'];
$conn = conectar();

$sql = "SELECT Producto  FROM producto WHERE pkProducto = " . $id;
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	$producto = $crow['Producto'];

}


$sql = "DELETE FROM producto WHERE pkProducto = " . $id;
$result = mysqli_query($conn, $sql);

// Devuelve el dato eliminado
$msg = 'El producto '.$producto.' ha sido eliminado';

desconectar($conn);

echo $msg;

?>
