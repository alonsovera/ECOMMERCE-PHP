<?php
include('../../administrador/config/bd.php');

    $userId = $_POST['userId'];
    $conn = conectar();
    $sql = "SELECT cNombre  FROM usuario WHERE pkUsuario = $userId";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)) {
        echo $row['cNombre']; 
    } else {
        echo "Iniciar Sesión"; 
    }


    desconectar($conn);

?>
