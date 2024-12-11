
<?php
session_start();  // Asegurarse de iniciar la sesión
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
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="initial-scale=1.0, target-densitydpi=device-dpi" />
	<!-- Bootstrap 3.3.6 -->
	<link href="../Content/plugins/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../Content/plugins/Boostrap.Responsive/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Sweetalert-->
    <link href="../Content/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Theme style -->
	<link href="../Content/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<link href="../Content/adminLTE/adminLTE/css/AdminLTE.min.css?v=@DateTime.Now.Ticks.ToString()?v=@DateTime.Now.Ticks.ToString()" rel="stylesheet" />
	<link href="../Content/adminLTE/adminLTE/css/skins/skin-mpol.min.css?v=@DateTime.Now.Ticks.ToString()?v=@DateTime.Now.Ticks.ToString()" rel="stylesheet" />
	<!-- iCheck -->
    <link rel="stylesheet" href="../Content/plugins/iCheck/square/blue.css">
    <style>
        input[type=date].form-control, input[type=time].form-control, input[type=datetime-local].form-control, input[type=month].form-control {
            line-height: initial;
        }
    </style>
	<!-- Section Styledheet -->
	<!-- jQuery 3.1.1 -->
	<script src="../Content/plugins/jQuery/jquery-3.1.1.min.js"></script>
	<style>
        .profile-user-img {
            width: 100%;  /* Ajusta la imagen al ancho del contenedor */
            border-radius: 50%; /* Mantener el aspecto circular de la imagen */
        }
    </style>
	<!--Script de Carga imagen por default-->
	<script>
		function imgError(img, ruta) {
			if (ruta == undefined) {
				ruta = "../Content/image/blank_image.png";
			}
			img.src = ruta;
		}
	</script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-gmanteq sidebar-mini fixed">
	<div id="adminlte--Loading">
		<i class="fa fa-refresh fa-spin" aria-hidden="true"></i>
		<p class="message--progress"></p>
	</div>
	<div class="wrapper">

		<!-- Main Header -->
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
				<!-- Sidebar user panel (optional) -->
				
		
				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header">Menu</li>
					<li><a href="../views/Producto.php"><i class="fa fa-product-hunt"></i> <span>PRODUCTOS</span></a></li>
					<li><a href="../views/Clientes.php"><i class="fa fa-users"></i> <span>CLIENTES</span></a></li>
					<li><a href="../views/Ventas.php"><i class="fa fa-shopping-cart"></i> <span>VENTAS</span></a></li>
				</ul>
				<!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
		

			<!-- Main content -->
			<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Panel para mostrar la imagen del usuario -->
                <div class="box box-primary">
				<div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" id="userImage" 
                                 src="../Content/image/user-default-blanco.png" 
                                 alt="User profile picture" 
                                 onerror="imgError(this)">
                            <h3 class="profile-username text-center" id="userName">Nombre Usuario</h3>
                            <p class="text-muted text-center" id="userRole">Cargo Usuario</p>
                            <input type="file" id="foto" name="foto">
                            <button class="btn btn-primary btn-block" onclick="actualizarFoto();"><b>Actualizar Foto</b></button>
                        </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Panel para editar la información del usuario -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Información</h3>
                    </div>
                    <div class="panel-body">
                        <form id="userInfoForm">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="correo">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="correo" required>
                            </div>
                            <button type="button" onclick="actualizarInformacion();" class="btn btn-success">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

			<!-- /.content -->
		</div>
        
		<!-- /.content-wrapper -->
		<!-- Main Footer -->
		<footer class="main-footer hidden-xs">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0.0
			</div>
			<center>
			<strong>Copyright &copy; 2024 Master In Pets.</strong> Todo los derechos Reservados
		</center>
		</footer>
	</div>
	<!-- ./wrapper -->
	<!-- REQUIRED JS SCRIPTS -->
	<!-- Bootstrap 3.3.6 -->
	<script src="../Content/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Jquery Validation -->
	<script src="../Content/plugins/Jquery.Validation/jquery.validate.min.js"></script>
	<script src="../Content/plugins/Jquery.Validation.unobtrusive/jquery.validate.unobtrusive.min.js"></script>
	<script src="../Content/plugins/MvcFoolProof/mvcfoolproof.unobtrusive.min.js"></script>
	<!-- Jquery Form -->
	<script src="../Content/plugins/Jquery.form/jquery.form.min.js"></script>
	<!-- Select 2 -->

	<script src="../Content/plugins/select2/js/select2.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../Content/adminLTE/adminLTE/js/app.min.js"></script>
	<!-- Jquery unibtrusive ajax  -->
	<script src="../Content/plugins/Jquery.unibtrusive.ajax/jquery.unobtrusive-ajax.min.js"></script>
	<!-- Boostrap.Notify  -->
	<script src="../Content/plugins/Boostrap.Notify/bootstrap-notify.min.js"></script>
	<!--sweetalert-->
	<script src="../Content/plugins/sweetalert/sweetalert.min.js"></script>
	<!-- iCheck -->
	<script src="../Content/plugins/iCheck/icheck.min.js"></script>
	<!--Helper de Format Date-->
	<script src="../Content/plugins/Date.Format/date.format.min.js"></script>
  
    <!--Intense-->
	<script src="../Content/plugins/Intense/intense.js"></script>
	<!--SlimScroll-->
	<script src="../Content/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- Section Scripts -->
	<!-- Script General  -->
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

$(document).ready(function () {
	obtenerNombreUsuario();
    obtenerInformacionUsuario();
});
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
        function actualizarFoto() {
            var formData = new FormData();
            formData.append('foto', $('#foto')[0].files[0]);
            formData.append('userId', userId);

            $.ajax({
                url: '../controllers/Usuario/ActualizarFoto.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    swal("¡Éxito!", "Foto actualizada correctamente.", "success");
                    $('#userImage').attr('src', response.newImagePath);
                },
                error: function() {
                    swal("Error", "No se pudo actualizar la foto.", "error");
                }
            });
			obtenerInformacionUsuario();
        }

        function actualizarInformacion() {
			var data = {
				userId: userId,
				nombre: $('#nombre').val(),
				correo: $('#correo').val()
			};
			$.ajax({
				url: '../controllers/Usuario/ActualizarUsuario.php',
				type: 'POST',
				async: false,
				data: data,
				success: function(response) {
					console.log(response);
					swal("¡Éxito!", "Información actualizada correctamente.", "success");
				},
				error: function() {
					swal("Error", "No se pudo actualizar la información.", "error");
				}
			});
			obtenerInformacionUsuario();
		}
function actualizarFoto() {
    var formData = new FormData();
    formData.append('foto', $('#foto')[0].files[0]);
    formData.append('userId', userId);

    $.ajax({
        url: '../controllers/Usuario/ActualizarFoto.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
			console.log(response);
            swal("¡Éxito!", "Foto actualizada correctamente.", "success");
            $('#userImage').attr('src', response.newImagePath);
        },
        error: function() {
            swal("Error", "No se pudo actualizar la foto.", "error");
        }
    });
}

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
                $('#nombre').val(datos[0]);  
                $('#correo').val(datos[1]); 
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









</script>
	
</body>
</html>
