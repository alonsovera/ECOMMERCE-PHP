<?php
include('../../administrador/config/bd.php');
$valores = "<option value=''>Seleccione una categoría</option>";  
$conn = conectar();
$sql = "SELECT pkCategoria, Categoria FROM categoria";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
    $valores .= "<option value='" . $crow['pkCategoria'] . "'>" . $crow['Categoria'] . "</option>";
}

desconectar($conn);

echo $valores;
?>
