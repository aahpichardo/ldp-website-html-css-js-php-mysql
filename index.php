<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
        <title>Luna de Plata Resort</title>
        <link rel="icon" type="image/x-icon" href="img/icono.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand">Luna de Plata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="restaurante.php">Restaurante</a></li>
                        <li class="nav-item"><a class="nav-link" href="rhumanos.php">Recursos Humanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white" style="background-image: url(img/ldp1.png);">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Donde el lujo</h1>
                    <h2 class="masthead-subheading mb-0">encuentra la tranquilidad</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"  data-bs-toggle="modal" data-bs-target="#reservacionModal" style="background-color: #96d1fb;"href="#scroll">Hacer una reservación</a>
                </div>
            </div>
        </header>
        
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/hotel1.jpeg" alt="Vista aerea del hotel" /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Elegante y tranquilo...</h2>
                            <p style="text-align: justify;" >Sumérjase en la opulencia mientras experimenta un servicio excepcional y comodidades de clase mundial. Cada detalle ha sido cuidadosamente diseñado para ofrecerle una experiencia inolvidable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/hotel2.jpeg" alt="Vista desde el mar" /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Comodidad en toda la extensión de la palabra</h2>
                            <p style="text-align: justify;" >Desde nuestras lujosas habitaciones hasta nuestras exquisitas opciones gastronómicas, en el Luna de Plata nos esforzamos por superar todas sus expectativas. Permita que nosotros le brindemos un refugio de distinción y sofisticación durante su estancia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/hotel3.jpeg" alt="Vista nocturna del hotel" /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Los mejores espectáculos.</h2>
                            <p style="text-align: justify;">Descubre el pináculo del entretenimiento en nuestro hotel de lujo. Disfruta de "Los Mejores Espectáculos", una experiencia única donde la magia y la elegancia se encuentran. Desde actuaciones teatrales hasta conciertos en vivo, cada momento es una obra maestra de entretenimiento exclusivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!--MODALES-->
    <div class="modal fade" id="reservacionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(2px);">
        <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header" style="background-color: #96d1fb;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Reservación</h1>
          <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-color: #96d1fb;">
            <div class="section3">
                    <!-- Formulario-->
                    <form method="post" id="formulario-reservacion" onsubmit="" action="php/guardar_reservacion.php">
                        <div class="mb-3">
                            <label for="nombre-persona-reservacion" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre-persona-reservacion" id="nombre-persona-reservacion">
                        </div>
                
                        <div class="mb-3">
                            <label for="numero-personas-reservacion" class="form-label">Número de personas</label>
                            <input type="number" class="form-control" name="numero-personas-reservacion" id="numero-personas-reservacion">
                        </div>

                        <div class="mb-3">
                            <label for="fecha-llegada-reservacion" class="form-label">Fecha de llegada</label>
                            <input type="date" class="form-control" name="fecha-llegada-reservacion" id="fecha-llegada-reservacion">
                        </div>

                        <div class="mb-3">
                            <label for="fecha-salida-reservacion" class="form-label">Fecha de salida</label>
                            <input type="date" class="form-control" name="fecha-salida-reservacion" id="fecha-salida-reservacion">
                        </div>

                        <div class="mb-3">
                            <p>Tipo de habitación</p>
                            <select class="form-control" id="tipo-habitacion-reservacion" name="tipo-habitacion-reservacion">
                                <option value="ninguna">Seleccionar</option>
                                <option value="plata">Plata</option>
                                <option value="plataPlus">Plata Plus</option>
                              </select>
                        </div>
                
                        <button type="submit" class="btn btn-success" id="boton-reservacion">Reservar</button>
                    </form>
            </div>
        </div>
      </div>
    </div>
  </div>
    <!--FIN MODALES-->

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Luna de Plata Resort elaborado por Angel Hernandez</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="showMessage.js" type="module"></script>
        <script src="formHandler.js" type="module"></script>
    </body>
</html>
