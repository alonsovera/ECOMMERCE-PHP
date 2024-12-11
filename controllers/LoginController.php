<?php
session_start();  

include('../administrador/config/bd.php');

$email = $_POST['username'];
$password_user = $_POST['password'];

$conn = conectar();

$sql = "SELECT * FROM usuario WHERE cCorreo = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); 
    $userId = $row['pkUsuario'];

    if ($row['fkRol'] == 1) {
        if ($password_user === $row['cPassword']) {
            $_SESSION['session_email'] = $email; 
            $_SESSION['name'] = $row['cNombre'];
            $_SESSION['user_id'] = $userId;
            echo 'success-admin'; 
        } else {
            echo 'error';  
        }
    } else {
        if (password_verify($password_user, $row['cPassword'])) {
            $sql = "SELECT cl.pkCliente, ca.pkCarrito FROM cliente cl
                    LEFT JOIN carrito ca ON cl.pkCliente = ca.fkCliente
                    WHERE cl.fkUsuario = '$userId'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $info = mysqli_fetch_assoc($result);
                $_SESSION['session_email'] = $email;
                $_SESSION['name'] = $row['cNombre'];
                $_SESSION['user_id'] = $userId;
                $_SESSION['carrito_id'] = $info['pkCarrito'];
                $_SESSION['pkCliente'] = $info['pkCliente'];
                echo 'success-user'; 
            } else {
                echo 'error'; 
            }
        } else {
            echo 'error'; 
        }
    }
} else {
    echo 'error';  
}

desconectar($conn);
?>
