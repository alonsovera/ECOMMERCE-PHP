<?php
include('../../administrador/config/bd.php');



$userId = $_POST['userId'];  
$uploadDir = '../../img/fotos/';
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['foto']['tmp_name'];
    $fileName = $_FILES['foto']['name'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $dest_path = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $conn = conectar();

        $sql = "UPDATE usuario SET cFoto = '$newFileName' WHERE pkUsuario = $userId";
        if (mysqli_query($conn, $sql)) {
            echo "Foto actualizada correctamente";
        } else {
            echo "Error al actualizar la base de datos";
        }

        mysqli_close($conn);
    } else {
        echo "Error al mover el archivo";
    }
} else {
    echo "Error en la carga del archivo";
}
?>
