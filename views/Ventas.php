<?php
session_start();  

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="CACHE-CONTROL" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>Master In Pets | Admin</title>
    <link rel="icon" type="image/png" href="../Content/image/masterinpetslogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap -->
    <link href="../Content/plugins/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Sweetalert-->
    <link href="../Content/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- AdminLTE -->
    <link href="../Content/adminLTE/adminLTE/css/AdminLTE.min.css" rel="stylesheet" />
    <link href="../Content/adminLTE/adminLTE/css/skins/skin-mpol.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="../Content/plugins/jQuery/jquery-3.1.1.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Incluye date-fns para usar como adaptador de fecha -->
<script src="https://cdn.jsdelivr.net/npm/date-fns@2.16.1/dist/date-fns.min.js"></script>
<!-- Incluye el adaptador de fecha de Chart.js para date-fns -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@1.0.0/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<!-- Agrega esto en la sección de <head> de tu documento HTML -->
<style>
    .content-wrapper {
        padding: 20px; /* Ajusta según necesites */
    }
    .table-container {
        overflow-x: auto; /* Hace scrollable la tabla si se desborda horizontalmente */
    }
    table {
        width: 100%; /* Asegura que la tabla use todo el ancho del contenedor */
        max-width: 100%;
    }
</style>

</head>
<body class="hold-transition skin-gmanteq sidebar-mini fixed">
<div class="wrapper">
<header class="main-header">

<!-- Logo -->
<a href="./Layout.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
        <img src="../Content/image/masterinpetslogo.png" alt="masterinpets" />
    </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
        <img src="../Content/image/masterinpetslogo.png" style="height: 80%;" alt="masterinpets" />
    </span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <span class="logo-mobil">
        <img src="../Content/image/masterinpetslogo.png" alt="masterinpets" style="height: 100%;" />
    </span>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink">
                        <img src="../Content/image/user-default-blanco.png" class="user-image" alt="User Image" id = "fotopequenia">
                        <span class="hidden-xs" id="userName">Iniciar Sesión</span>
                    </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <img src="../Content/image/user-default-blanco.png" class="img-circle" alt="User Image" id = "fotogrande">
                        <p id="userHeaderName">Iniciar Sesión</p>
                    </li>
                    <!-- Menu Footer-->	
                    <li class="user-footer">
                        
                            <a href="Perfil.php" class="btn btn-default">Ver perfil</a>
                            <a href="../index.php" class="btn btn-default">Cerrar sesión</a>									
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header">Menu</li>
                <li><a href="../views/Producto.php"><i class="fa fa-product-hunt"></i> <span>PRODUCTOS</span></a></li>
                <li><a href="../views/Clientes.php"><i class="fa fa-users"></i> <span>CLIENTES</span></a></li>
                <li><a href="../views/Ventas.php"><i class="fa fa-shopping-cart"></i> <span>VENTAS</span></a></li>
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content-header">
        <h1>DASHBOARD<small>Ventas</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Gráfico de Ventas -->
            <div class="col-md-6">
                <canvas id="salesChart" height="400"></canvas>
            </div>
            <!-- Tabla de Detalles de Ventas -->
            <div class="col-md-6">
                <div class="table-container">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="detalleVentasBody">
                            <!-- Aquí se inyectarán los datos de PHP -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> 1.0.0</div>
        <center>
        <strong>Copyright &copy; 2024 Master In Pets.</strong> Todos los derechos reservados.
        </center>
    </footer>
</div>

<!-- REQUIRED JS SCRIPTS -->
<script src="../Content/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../Content/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="../Content/adminLTE/adminLTE/js/app.min.js"></script>
<script>
    <?php
        if (isset($_SESSION['session_email'], $_SESSION['name'], $_SESSION['user_id'])) {
            echo "var userEmail = " . json_encode($_SESSION['session_email']) . ";";
            echo "var userName = " . json_encode($_SESSION['name']) . ";";
            echo "var userId = " . json_encode($_SESSION['user_id']) . ";";
            echo "console.log('Bienvenido, ' + userName + ' (' + userEmail + ')');";
        } else {
            echo "window.location.href = 'login.php';";  
        }
    ?>
</script>
<script>
    function obtenerInformacionUsuario() {
    $.ajax({
        url: '../controllers/Usuario/ObtenerUsuario.php',
        type: 'POST',
        async: false,
        data: { userId: userId },
        success: function(response) {
            if (!response.startsWith('Error')) {
				console.log(response);
                var datos = response.split('|');
                var imgPath = datos[2] ? './../img/fotos/' + datos[2] : '../Content/image/user-default-blanco.png';
                $('#userImage, #userHeaderImage').attr('src', imgPath);
				$('#fotopequenia').attr('src',imgPath);
				$('#fotogrande').attr('src',imgPath);
            } else {
                console.error('Error al obtener la información del usuario:', response);
                $('#userName').text('Iniciar Sesión');
            }
        },
        error: function() {
            console.error('Error al conectar con el servidor.');
            $('#userName').text('Iniciar Sesión');
        }
    });
}
function obtenerNombreUsuario() {
    $.ajax({
        url: '../controllers/Usuario/ObtenerNombre.php', 
        type: 'POST',
        data: { userId: userId }, 
        success: function(response) {
            $('#userName').text(response); 
			$('#userHeaderName').text(response); 
        },
        error: function() {
            console.error('Error al obtener el nombre del usuario');
            $('#userName').text('Iniciar Sesión'); 
        }
    });
}
function cargarDetallesVentas() {
    $.ajax({
        url: '../controllers/Venta/ListarVentas.php',
        type: 'POST',
        dataType: 'html',
        success: function(response) {
            if (response === "empty") {
                $('#detalleVentasBody').html('<tr><td colspan="4">No hay ventas registradas</td></tr>');
            } else {
                $('#detalleVentasBody').html(response);
            }
        },
        error: function() {
            console.error('Error al cargar los detalles de las ventas');
        }
    });
}

function generarGrafica(){
    $.ajax({
        url: '../controllers/Venta/VentaController.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var fechas = data.map(function(item) { return item.fecha; });
            var totales = data.map(function(item) { return item.total; });

            var ctx = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: fechas,
                    datasets: [{
                        label: 'Ventas Totales (S/.)',
                        data: totales,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        },
                        x: {
                            type: 'time',
                            time: {
                                unit: 'day',
                                tooltipFormat: 'yyyy-MM-dd'
                            },
                            title: {
                                display: true,
                                text: 'Fecha'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error al obtener datos de ventas: ' + error);
                }
            });
}
$(document).ready(function () {
    obtenerInformacionUsuario();
    obtenerNombreUsuario();
    generarGrafica();
    cargarDetallesVentas();
    });

</script>



<script>

</script>
</body>
</html>
