<?php
include('../../administrador/config/bd.php');



$pkCliente = $_POST['pkCliente'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$conn = conectar();

$sqlCliente = "UPDATE cliente SET 
            cDNI = '$dni', 
            cNombre = '$nombre', 
            cApellido = '$apellido', 
            cCorreo = '$correo', 
            cTelefono = '$telefono', 
            cDireccion = '$direccion'
        WHERE pkCliente = '$pkCliente'";

if (mysqli_query($conn, $sqlCliente)) {
    $sqlUsuario = "UPDATE usuario SET 
                cNombre = '$nombre', 
                cCorreo = '$correo'
            WHERE pkUsuario = (SELECT fkUsuario FROM cliente WHERE pkCliente = '$pkCliente')";

    if (mysqli_query($conn, $sqlUsuario)) {
        echo "Los datos del cliente y usuario han sido actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos del usuario: " . mysqli_error($conn);
    }
} else {
    echo "Error al actualizar los datos del cliente: " . mysqli_error($conn);
}

desconectar($conn);
?>
