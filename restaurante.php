<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Luna de Plata - Restaurante</title>
        <link rel="icon" type="image/x-icon" href="img/icono.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Luna de Plata - Restaurante</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Volver al inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white" style="background-image: url(img/restaurante1.jpg);">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Donde cada bocado</h1>
                    <h2 class="masthead-subheading mb-0">es una obra maestra</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#conocenos">Sobre nosotros</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#menu">Menú</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#nuevoPedido">Realizar pedido</a>
                </div>
            </div>
        </header>
        <!-- Contenido de  menú-->
        <div class="container" id="menu">
    <h1 class="text-center">Nuestro menú</h1>

    <div id="platillos" class="row">
        <h2 class="col-12 text-center">Platillos</h2>
        <div class="col-sm-6 item text-center">
            <p>Filete Mignon con Salsa de Trufas</p>
            <img src="img/filete.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
        <div class="col-sm-6 item text-center">
            <p>Salmón Salvaje con Risotto de Azafrán y Espuma de Langosta</p>
            <img src="img/salmon.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
    </div>

    <div id="bebidas" class="row">
        <h2 class="col-12 text-center">Bebidas</h2>
        <div class="col-sm-6 item text-center">
            <p>Limonada</p>
            <img src="img/limonada.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
        <div class="col-sm-6 item text-center">
            <p>Vino</p>
            <img src="img/vino.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
    </div>

    <div id="postres" class="row">
        <h2 class="col-12 text-center">Postres</h2>
        <div class="col-sm-6 item text-center">
            <p>Tiramisú de Trufa Negra</p>
            <img src="img/tiramisu.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
        <div class="col-sm-6 item text-center">
            <p>Soufflé de Frambuesa con Coulis de Champán Rosado</p>
            <img src="img/souffle.jpg" class="img-fluid mx-auto d-block" style="max-width: 200px; max-height: 200px; border-radius: 20px;">
        </div>
    </div>
</div>

<!-- Contenido de información acerca del restaurante-->
<div class="container mt-3 mb-3" id="conocenos">
    <div class="row">
        <h2 class="text-center mt-3">Sobre el restaurante</h2>
        <div class="col-sm-6">
            <img src="img/restaurante2.jpg" class="img-fluid" alt="Imagen del restaurante" style="border-radius: 20px; max-width: 500px; max-height: 800px;">
        </div>
        <div class="col-sm-6">
            <p class="" style="font-size: 1.5em; text-align: justify;">Sumérjase en una experiencia culinaria sin igual en nuestro exclusivo restaurante, donde la elegancia se encuentra con la excelencia gastronómica. Con un ambiente refinado y un servicio impecable, cada visita se convierte en un festín para los sentidos. Nuestro menú exquisito, cuidadosamente elaborado por chefs de renombre, presenta ingredientes frescos y platos innovadores que elevan la cocina a nuevas alturas. Disfrute de la sofisticación en cada detalle, desde la decoración opulenta hasta la presentación meticulosa de cada plato. En nuestro restaurante lujoso, la indulgencia es la norma, y cada comida se convierte en una experiencia inolvidable de lujo y deleite.</p>
        </div>
    </div>
</div>

        <!--Modal de pedido-->

        
        <div class="modal fade" id="nuevoPedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(2px);">
            <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header" style="background-color: #96d1fb;">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Realizar pedido</h1>
              <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #96d1fb;">
                <div class="section3">
                        <!-- Formulario-->
                            <form id="form" method="post" action="php/guardar_pedido.php">
                                <div class="mb-3">
                                    <label for="nombre-cliente-pedido" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre-cliente-pedido" id="nombre-cliente-pedido">
                                </div>

                                <div class="mb-3">
                                    <label for="fecha-pedido" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" name="fecha-pedido" id="fecha-pedido">
                                </div>
                        
                                <div class="mb-3">
                                    <p>Platillo</p>
                                    <select class="form-control" id="platillo" name="platillo">
                                        <option value="ninguno">Ninguno</option>
                                        <option value="filete">Filete Mignon con Salsa de Trufas</option>
                                        <option value="salmon">Salmón Salvaje con Risotto de Azafrán y Espuma de Langosta</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                    <p>Bebida</p>
                                      <select class="form-control" id="bebida" name="bebida">
                                        <option value="ninguno">Ninguno</option>
                                        <option value="limonada">Limonada</option>
                                        <option value="vino">Vino tinto</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                    <p>Postre</p>
                                      <select class="form-control" id="postre" name="postre">
                                        <option value="ninguno">Ninguno</option>
                                        <option value="tiramisu">Tiramisú de Trufa Negra</option>
                                        <option value="souffle">Soufflé de Frambuesa con Coulis de Champán Rosado</option>
                                      </select>
                                </div>

                                <button type="submit" id="boton-pedido-restaurante" class="btn btn-success">Hacer pedido</button>
                                
                            </form>
                </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; pLibrary realizado por: Angel Hernandez</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/carousel.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </body>
</html>
