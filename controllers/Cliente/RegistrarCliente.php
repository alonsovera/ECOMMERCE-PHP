<?php
include('../../administrador/config/bd.php');

$nombres = $_POST['nombres'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$password = $_POST['password'];

$conn = conectar();

$sql = "SELECT * FROM usuario WHERE cCorreo = '$correo'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo 'error-email-exists'; 
} else {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT); 
    $sqlUsuario = "INSERT INTO Usuario (fkRol, cNombre, cCorreo, cPassword) VALUES (3, '$nombres', '$correo', '$passwordHash')";
    if (mysqli_query($conn, $sqlUsuario)) {
        $userId = mysqli_insert_id($conn);  

        $sqlCliente = "INSERT INTO Cliente (fkUsuario, cDNI, cNombre, cApellido, cCorreo, cTelefono, cDireccion) 
                    VALUES ('$userId', '$dni', '$nombres', '$apellido', '$correo', '$telefono', '$direccion')";

        if (mysqli_query($conn, $sqlCliente)) {
        $clienteId = mysqli_insert_id($conn);  

            $sqlCarrito = "INSERT INTO carrito (fkCliente) VALUES ('$clienteId')";
            if (mysqli_query($conn, $sqlCarrito)) {
                $msg = "Usuario, cliente y carrito registrados exitosamente.";
            } else {
                $msg = "Error al registrar en Carrito: " . mysqli_error($conn);
            }
                        } else {
                            $msg = "Error al registrar en Cliente: " . mysqli_error($conn);
                        }
    } else {
    $msg = "Error al registrar en Usuario: " . mysqli_error($conn);
    }
 }
desconectar($conn);


?>
