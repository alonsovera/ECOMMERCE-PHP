
<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Master In Pets" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta property="og:title" content="Master In Pets">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Master In Pets">
    <meta property="og:type" content="website">
    <meta name="author" content="Web altoque" />
    <meta name="Resource-type" content="Document" />
    <meta http-equiv="X-UA-Compatible" content="IE=5; IE=6; IE=7; IE=8; IE=9; IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Master In Pets</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="~/Content/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="../Content/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Content/js/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../Content/js/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../Content/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Content/plugins/jquery.dlmenu/component.css" />
    <link rel="stylesheet" href="../Content/css/app.min.css">
    <link rel="stylesheet" href="../Content/css/_responsive.min.css">
    <link rel="stylesheet" href="../Content/plugins/sweetalert2/sweetalert2.css" />

    <style type="text/css">
        .catalogo_link {
            margin: 0 25px !important;
        }

            .catalogo_link img {
                width: 12px;
                margin-left: 10px;
                position: relative;
                top: -2px;
            }
    </style>
    <style type="text/css">
        
        .carousel-item img {
        height: 500px; /* Establece la altura que desees */
        object-fit: cover; /* Asegura que la imagen cubra el espacio sin distorsionarse */
        width: 100%; /* Mantiene el ancho al 100% */
    }
        .input-group {
            display: flex;
            align-items: center;
        }

        #search {
            flex: 1; 
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            box-sizing: border-box;
            outline: none; 
        }

        .search-btn {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: 0;
            border-radius: 0 4px 4px 0;
            background-color: #ebeaea;
            cursor: pointer;
            outline: none; 
        }

            .search-btn:hover {
                background-color: #ebeaea; 
                border-color: #ccc; 
            }

            .search-btn:focus {
                box-shadow: none;
            }

        #productosList {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            list-style: none;
            padding-left: 0;
            width: calc(100% - 2px);
            max-height: 150px;
            overflow-y: auto;
            margin-top: -1px;
            display: none;
        }

            #productosList li {
                padding: 8px 12px;
                cursor: pointer;
            }

                #productosList li:hover {
                    background-color: #f5f5f5;
                }
        .relative{
            color:white;
            transition: all 0.35s ease-in-out;
        }

        .relative:hover{
            color:greenyellow;
            
        }
    </style>


    <link rel="stylesheet" href="../Content/plugins/Jquery.CustomScrollBar/jquery.mCustomScrollbar.css">

    <script type="text/javascript" src="../Content/js/LoginGoogle.min.js?v=@DateTime.Now.Ticks.ToString()"></script>
       

 

    <!-- Facebook Pixel Code -->

    <!-- End Facebook Pixel Code -->

</head>
<body>

    <div id="search-loading" class="hidden"></div>

    <div id="menu-loading" class="hidden"></div>

    <div id="mobile"></div>

    <div class="loading" id="loading">
        <div class="loading__inner">
            <img src="../Content/image/icons/loading_page.gif" alt="Master In Pets" class="" />
        </div>
    </div>

    <div class="loading-tesoro" id="loading-tesoro">
        <div class="loading__inner">
            <img src="../Content/image/icons/loading_page.gif" alt="Master In Pets" class="" />
        </div>
    </div>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/" class="navbar-brand">
            <img src="../Content/image/masterinpetslogo.png" class="logo" alt="Master In Pets" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="././LayoutGeneral.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="././HomeShop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="././Contact.php">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iniciar Sesión
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="././PerfilCliente.php">Mi Perfil</a>
                        <a class="dropdown-item" href="../././index.php">Cerrar sesión</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="././Carrito.php" class="nav-link">
                        <img src="../Content/image/icons/cart.png" alt="Carrito">
                        <span class="badge badge-pill badge-primary" id="cart-count">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
  
<div class="container mt-5">
        <h2>Mis Datos Personales</h2>
        <form id="datosClienteForm">
            <div class="row" id="datosCliente">
                <!-- Los datos del cliente se cargarán aquí -->
            </div>
        </form>
    </div>

   
   


    <!-- Suscríbete -->
    <section class="acciones row-section desktop-footer @(Request.Url.AbsoluteUri.Contains("Postulacion") ? "hidden" :  "")">
        <div class="content">
            <div class="grid-content grid-30-30-40 gap-1-5">
                <div class="pt-35">
                    <h5>Aceptamos</h5>
                    <img src="../Content/image/tarjetas1.png" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>

        <div class="content desktop-footer">
            <div class="grid-content grid-30-15-15-20-20 gap-1-5">
                <div>
                  
                    <div class="contact-us mt-40">
                        <div>
                            <ul class="redes">
                                <li><img src="../Content/image/icons/call.png" alt=""></li>
                                <li>
                                    <p>
                                        Ayuda <span>Consultas</span> <br>
                                        +51 924 121 113
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-20" style="padding-left: 70px !important;">
                            <p>Siguenos</p>
                            <ul class="redes">
                                <li><a href="https://www.facebook.com/masterinpetsla/?locale=es_LA" target="_blank"><img src="../Content/image/icons/facebook.png" alt=""></a></li>
                                <li><a href="https://www.instagram.com/masterinpets/" target="_blank"><img src="../Content/image/icons/instagram.png" alt=""></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <br>    
              
               
                <div>
                    <h5 style="font-weight:bold">Contáctanos</h5>
                    <ul>
                        <li><a class="relative" target="_blank" href="https://api.whatsapp.com/send?phone=+51924121113&text=Hola%20Master%20In%20Pets%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios%20que%20vi%20en%20la%20web"><i class="fa fa-phone"></i> +51 924 121 113</a></li>
                        <li><a class="relative" target="_blank" href="mailto:Citypetsveterinaria@gmail.com"><i class="fa fa-envelope"></i>Citypetsveterinaria@gmail.com</a></li>
                        <li><a class="relative" target="_blank" href="https://maps.app.goo.gl/fQ6QeAUHtxKyx7y58"><i class="fa fa-map-marker"></i> Avenida Haya De La Torre, Int. 982-984 La Perla Distrito:Callao, Callao 07016</a></li>
                        <li><a class="relative" href="/Helper/LibroReclamacion">Libro de reclamaciones</a></li>
                    </ul>
                    <div class="mt-40"><p>&copy; 2024 Master In Pets | Todos los derechos reservados. </p></div>
                </div>
            </div>
        </div>


        <div class="content mobile-footer">
            <div class="grid-content grid-footer-45-65">

                <div>
                    <p class="siguenos">Siguenos</p>
                    <ul class="redes">
                        <li><a href="https://www.facebook.com/masterinpetsla/" target="_blank"><img src="../Content/image/icons/facebook.png" alt=""></a></li>
                        <li><a href="https://www.instagram.com/masterinpets/" target="_blank"><img src="../Content/image/icons/instagram.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="grid-content grid-one">
             

                <button class="accordion_footer" type="button">
                    Productos <i class="fa fa-chevron-down"></i>
                </button>
                <div class="panel">
                    <ul>
                        <li><a href="/Producto">Categorías</a></li>
                        <li><a href="/Producto">Marcas</a></li>
                        <li><a href="/Producto">Promociones</a></li>
                        <li><a href="/Producto">Legales</a></li>
                    </ul>
                </div>

              

                <button class="accordion_footer" type="button">
                    Contáctanos <i class="fa fa-chevron-down"></i>
                </button>
                <div class="panel">
                    <ul>
                        <li><a class="relative" target="_blank" href="https://api.whatsapp.com/send?phone=+51924121113&text=Hola%20Master%20In%20Pets%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios%20que%20vi%20en%20la%20web"><i class="fa fa-phone"></i> +51 924 121 113</a></li>
                        <li><a href="mailto:Citypetsveterinaria@gmail.com"><i class="fa fa-envelope"></i> Citypetsveterinaria@gmail.com</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-map-marker"></i> Avenida Haya De La Torre, Int. 982-984 La Perla Distrito:Callao, Callao 07016</a></li>
                        <li><a href="/Helper/LibroReclamacion">Libro de reclamaciones</a></li>
                    </ul>
                </div>

                <button class="accordion_footer" type="button">
                    Preguntas Frecuentes <i class="fa fa-chevron-down"></i>
                </button>
                <div class="panel">
                    <ul>
                        <li><a href="/Helper/PreguntasFrecuentes">Preguntas frecuentes</a></li>
                    </ul>
                </div>

                <div class="suscribete">
                    <h5>Suscríbete</h5>
                    <p>Recibe Información de nuestras promociones, novedades  y descuentos.</p>

                        <div class="input-group">
                            <input type="email" name="cEmail" id="" placeholder="Correo electrónico" required>
                            <button type="submit">Enviar</button>
                        </div>
                    
                </div>

                <div class="medio_pago">
                    <p>Medios de Pago</p>
                    <ul>
                        <li><img src="../Content/image/icons/svg/visa.svg" alt="Visa" /></li>
                        <li><img src="../Content/image/icons/svg/mastercard.svg" alt="Mastercard" /></li>
                        <li><img src="../Content/image/icons/svg/bcp.svg" style="width: 58px" alt="Bcp" /></li>
                        <li><img src="../Content/image/icons/svg/interbank.svg" style="width:83px;" alt="Interbank" /></li>
                    </ul>
                    <ul>
                        <li><img src="../Content/image/icons/svg/yape.svg" alt="Yape" /></li>
                        <li><img src="../Content/image/icons/svg/plin.svg" style="width:40px" alt="Plin" /></li>
                        <li><img src="../Content/image/icons/svg/transferencia.svg" style="width:58px" alt="Transferencia" /></li>
                        <li>
                            <img src="../Content/image/icons/svg/deposito_online.svg" style="margin-left: 12px; display: block;" alt="Depósito onlineo agencia" />
                            <img src="../Content/image/icons/svg/deposito_online_texto.svg" style=" width: 63px; margin-top: 12px;" alt="Alternate Text" />
                        </li>
                    </ul>
                </div>

                <div class="copy-info"><p>&copy; 2024 Master In Pets | Todos los derechos reservados. </p></div>
            </div>
        </div>

    </footer>

    <script type="text/javascript" src="../Content/js/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Content/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Jquery Validation -->
  
    <!-- Jquery Form -->
    <script type="text/javascript" src="../Content/plugins/Jquery.form/jquery.form.min.js"></script>
    <script type="text/javascript" src="../Content/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../Content/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Content/js/app.min.js"></script>
    <script type="text/javascript" src="../Content/plugins/jquery.dlmenu/modernizr.custom.js"></script>
    <script type="text/javascript" src="../Content/plugins/jquery.dlmenu/jquery.dlmenu.js"></script>

    <script>
        <?php
            if(isset($_SESSION['session_email']) && isset($_SESSION['name']) && isset($_SESSION['carrito_id']) && isset($_SESSION['user_id']) && isset($_SESSION['pkCliente'])) {
                echo "var userEmail = " . json_encode($_SESSION['session_email']) . ";";
                echo "var userName = " . json_encode($_SESSION['name']) . ";";
                echo "var userCarrito = " . json_encode($_SESSION['carrito_id']) . ";";
                echo "var userId = " . json_encode($_SESSION['user_id']) . ";";
                echo "var clienteId = " . json_encode($_SESSION['pkCliente']) . ";";
                echo "console.log('Bienvenido, ' + userName + ' (' + userEmail + ') - Carrito: ' + userCarrito + ', Cliente ID: ' + clienteId);";
            } else {
                echo "window.location.href = 'login.php';";  
                exit;
            }
        ?>
    </script>
    <script>
        $(function () {
            $('#dl-menu').dlmenu();

            $('#search').on('click', function () {
                $('#productosList').show(); 
            });

            $(document).on('click', function (event) {
                if (!$(event.target).closest('.select-wrapper').length) {
                    $('#productosList').hide(); 
                }
            });

            $('#search').on('input', function () {
                var filtro = $(this).val().toLowerCase();
                $('#productosList li').each(function () {
                    var producto = $(this).text().toLowerCase();
                    $(this).toggle(producto.includes(filtro));
                });
                $('#productosList').show(); 
            });
        });
        function obtenerNombreUsuario() {
            $.ajax({
                url: '../controllers/Usuario/ObtenerNombre.php', 
                type: 'POST',
                async: false,
                data: { userId: userId }, 
                success: function(response) {
                    $('#navbarDropdownMenuLink').text(response); 
                },
                error: function() {
                    console.error('Error al obtener el nombre del usuario');
                    $('#navbarDropdownMenuLink').text('Iniciar Sesión');
                }
            });
        }

        function actualizarCliente(pkCliente) {
                var datos = {
                    pkCliente: pkCliente,
                    dni: $('#cDNI').val(),
                    nombre: $('#cNombre').val(),
                    apellido: $('#cApellido').val(),
                    correo: $('#cCorreo').val(),
                    telefono: $('#cTelefono').val(),
                    direccion: $('#cDireccion').val()
                };
                $.ajax({
                    url: '../controllers/Cliente/ActualizarCliente.php', 
                    type: 'POST',
                    async: false,
                    data: datos,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Cliente Actualizado',
                            text: 'Los datos del cliente han sido actualizados correctamente.',
                            confirmButtonText: 'Aceptar'
                        });
                        obtenerNombreUsuario();

                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al actualizar',
                            text: 'No se pudo actualizar los datos del cliente.',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                });
            }


        function cargarDatosCliente() {
                $.ajax({
                    type: 'POST',
                    url: '../controllers/Cliente/ObtenerCliente.php', 
                    async: false,
                    data: { userId:userId  }, 
                    success: function(response) {
                        $('#datosCliente').html(response);
                    },
                    error: function() {
                        alert('Error al cargar los datos.');
                    }
                });
            }

        $(document).ready(function() {
            cargarDatosCliente();
            buscarDetalleCarrito(userCarrito);
            obtenerNombreUsuario();
           
        });
    function buscarDetalleCarrito(userCarrito) {
            $.ajax({
                url: '../controllers/Carrito/BuscarDetalleCarrito.php', 
                type: 'POST',
                async: false,
                data: { userCarrito: userCarrito },
                success: function(response) {
                    console.log('Respuesta recibida:', response); 
                    $('#cart-count').text(response); 
                },
                error: function(xhr, status, error) {
                    console.error('Error al realizar la petición:', xhr.responseText);
                }
            });
        }


    </script>


    <script type="text/javascript" src="../Content/plugins/Jquery.CustomScrollBar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        var acc = document.getElementsByClassName("accordion_footer");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>


</body>
</html>