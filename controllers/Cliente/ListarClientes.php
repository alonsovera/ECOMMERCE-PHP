<?php

include('../../administrador/config/bd.php');

$valores = "";

$conn = conectar();

$num = 0;

$sql = "SELECT pkcliente, cNombre, cApellido, cCorreo, cTelefono, cDireccion FROM cliente";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
    $valores .= '<tr>'.
                '<td>'.$crow['cNombre'].'</td>'.
                '<td>'.$crow['cApellido'].'</td>'.
                '<td>'.$crow['cCorreo'].'</td>'.
                '<td>'.$crow['cTelefono'].'</td>'.
                '<td>'.$crow['cDireccion'].'</td>'.
                '<td>'.
        '<button onclick="eliminar_form('.$crow['pkcliente'].')" class="btn btn-danger btn-xs" style="font-size:14px;"><i class="fa fa-trash"></i></button>&nbsp;'.
    '</td>'.
'</tr>';

    $num++;
}

desconectar($conn);

echo $valores.','.$num;

?>
