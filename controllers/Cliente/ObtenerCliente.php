<?php
include('../../administrador/config/bd.php');

$userId = $_POST['userId'];  
$conn = conectar();

$sql = "SELECT pkCliente, cDNI, cNombre, cApellido, cCorreo, cTelefono, cDireccion FROM cliente WHERE fkUsuario = $userId";
$result = mysqli_query($conn, $sql);

if($crow = mysqli_fetch_assoc($result)) {
    echo '<input type="hidden" id="pkCliente" value="'.$crow['pkCliente'].'">';

    foreach ($crow as $key => $value) {
        if ($key != 'pkCliente') {  
            echo '<div class="form-group col-md-6">
                      <label>'.ucfirst(substr($key, 1)).':</label>
                      <input type="text" class="form-control" id="'.$key.'" name="'.$key.'" value="'.$value.'">
                  </div>';
        }
    }
    echo '<div class="col-md-12">
              <button type="button" onclick="actualizarCliente('.$crow['pkCliente'].')" class="btn btn-primary btn-xs" style="font-size:14px;"><i class="fa fa-pencil"></i> Actualizar</button>
          </div>';
} else {
    echo "No se encontraron datos.";
}

// Cerrar conexión
desconectar($conn);
?>
