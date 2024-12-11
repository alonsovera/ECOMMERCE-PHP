<?php
include('../../administrador/config/bd.php');

    $conn = conectar();

    $userId = $_POST['userId']; 
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sqlUsuario = "UPDATE usuario SET cNombre='$nombre', cCorreo='$correo' WHERE pkUsuario=$userId";
    $resultadoUsuario = mysqli_query($conn, $sqlUsuario);

    if ($resultadoUsuario) {
        $sqlPersonal = "UPDATE personal SET cNombre='$nombre', cCorreo='$correo' WHERE fkUsuario=$userId";
        $resultadoPersonal = mysqli_query($conn, $sqlPersonal);

        if ($resultadoPersonal) {
            echo "Actualización exitosa.";
        } else {
            echo "Error al actualizar la tabla personal: " . mysqli_error($conn);
        }
    } else {
        echo "Error al actualizar la tabla usuario: " . mysqli_error($conn);
    }

    desconectar($conn);

?>
