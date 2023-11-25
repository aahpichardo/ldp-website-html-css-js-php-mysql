<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="./main.js" type="module"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Luna de Plata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Volver al inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                    <h1 class="">Luna de Plata - Administración</h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"  style="background-color: #96d1fb;"href="#scroll">Recursos Humanos</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"   style="background-color: #96d1fb;"href="#scroll">Reservaciones</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"  style="background-color: #96d1fb;"href="#scroll">Restaurante</a>
            </div>
        </header>
        
        <!-- Contennido de Empleados-->
        <div class="container">
            <p>empleados</p>
            <div class="container mt-4">
                <h2>Tabla de Empleados</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#nuevoEmpleado">Registrar nuevo empleado</a>
                <!-- Agrega la clase 'table' de Bootstrap para estilos de tabla -->
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>ID</th>
                      <th>Nombre del Empleado</th>
                      <th>Puesto</th>
                      <th>Dirección</th>
                      <th>Teléfono</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0</td>
                      <td>Empleado 1</td>
                      <td>Desarrollador</td>
                      <td>Av. centro</td>
                      <td>123</td>
                      <td>
                        <button class="button">Editar</button>
                        </button>
                        <button class="button">Eliminar</button>
                      </td>
                    </tr>
                    <?php
                          require_once 'php/config.php';

                          if (isset($_POST['id_to_delete'])) {
                            $id_to_delete = $_POST['id_to_delete'];
                            $mysqli->query("DELETE FROM empleados WHERE id = $id_to_delete");
                          }
                        
                          $result = $mysqli->query('SELECT * FROM empleados');

                          while ($row = $result->fetch_assoc())
                          {
                              echo "<tr>";
                              echo "<th>" . $row['id'] . "</th>";
                              echo "<td>" . $row['nombre'] . "</td>";
                              echo "<td>" . $row['puesto'] . "</td>";
                              echo "<td>" . $row['direccion'] . "</td>";
                              echo "<td>" . $row['telefono'] . "</td>";
                              echo "<td>";
                              echo "<button class='button'>Editar</button>";
                              echo "<form method='POST'>";
                              echo "<input type='hidden' name='id_to_delete' value='" . $row['id_cliente'] . "'>";
                              echo "<button type='submit' class='button'>Eliminar</button>";
                              echo "</form>";
                              echo "</td>";
                              echo "</tr>";
                          }
                        ?>
                  </tbody>
                </table>
              </div>
        </div>
        
            <!--RESERVACIONES-->
            <div class="container mt-4">
                <p>reservas</p>
                <h2>Tabla de Reservaciones</h2>
                
                <!-- Agrega la clase 'table' de Bootstrap para estilos de tabla -->
                <table class="table" id="tablaReservaciones">
                    <thead class="thead-dark">
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Número de personas</th>
                        <th>Fecha de llegada</th>
                        <th>Fecha de salilda</th>
                        <th>Tipo de habitacion</th>
                        <th>Costo total</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <td>Angel P</td>
                        <td>2</td>
                        <td>11-11-23</td>
                        <td>11-12-23</td>
                        <td>Plata</td>
                        <td>2500</td>
                        <td>
                          <button class="button">Editar</button>
                          </button>
                          <button class="button">Eliminar</button>
                        </td>
                      </tr>
                        <?php
                          require_once 'php/config.php';

                          if (isset($_POST['id_to_delete'])) {
                            $id_to_delete = $_POST['id_to_delete'];
                            $mysqli->query("DELETE FROM reservaciones WHERE id_cliente = $id_to_delete");
                          }
                        
                          $result = $mysqli->query('SELECT * FROM reservaciones');

                          while ($row = $result->fetch_assoc())
                          {
                              echo "<tr>";
                              echo "<th>" . $row['id_cliente'] . "</th>";
                              echo "<td>" . $row['nombre'] . "</td>";
                              echo "<td>" . $row['numero_personas'] . "</td>";
                              echo "<td>" . $row['fecha_entrada'] . "</td>";
                              echo "<td>" . $row['fecha_salida'] . "</td>";
                              echo "<td>" . $row['tipo_habitacion'] . "</td>";
                              echo "<td>" . $row['costo_total'] . "</td>";
                              echo "<td>";
                              echo "<button class='button'>Editar</button>";
                              echo "<form method='POST'>";
                              echo "<input type='hidden' name='id_to_delete' value='" . $row['id_cliente'] . "'>";
                              echo "<button type='submit' class='button'>Eliminar</button>";
                              echo "</form>";
                              echo "</td>";
                              echo "</tr>";
                          }
                        ?>
                    </tbody>
                  </table>
            </div>
        </div>
        

        <!-- Contennido de Restaurante-->
        <div class="container">
            <p>pedidos restaurante</p>
            <div class="container mt-4">
                <h2>Tabla de Pedidos</h2>
                
                <!-- Agrega la clase 'table' de Bootstrap para estilos de tabla -->
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Nombre del Cliente</th>
                      <th>Fecha del Pedido</th>
                      <th>Pedido</th>
                      <th>Costo Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Cliente 1</td>
                      <td>2023-11-22</td>
                      <td>Producto A, Producto B</td>
                      <td>$100.00</td>
                    </tr>
                    <!-- Puedes agregar más filas según sea necesario -->
                  </tbody>
                </table>
              </div>
        </div>

        <!--modal agregar nuevo empleado-->
        <div class="modal fade" id="nuevoEmpleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(2px);">
            <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header" style="background-color: #96d1fb;">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar nuevo empleado</h1>
              <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #96d1fb;">
                <div class="section3">
                        <!-- Formulario-->
                            <form id="form">
                                <div class="mb-3">
                                    <label for="nombre-empleado" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre-empleado" id="nombre-empleado">
                                </div>
                        
                                <div class="mb-3">
                                    <p>Puesto del empleado</p>
                                    <select class="form-control" id="puesto-empleado">
                                        <option value="opcion1">Seleccionar</option>
                                        <option value="opcion2">Recepcionista</option>
                                        <option value="opcion3">Limpieza</option>
                                        <option value="opcion4">Cocina</option>
                                        <option value="opcion5">Mantenimiento</option>
                                        <option value="opcion6">Portero</option>
                                      </select>
                                </div>
    
                                <div class="mb-3">
                                    <label for="direccion-empleado" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" name="direccion-empleado" id="direccion-empleado">
                                </div>
    
                                <div class="mb-3">
                                    <label for="telefono-empleado" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" name="telefono-empleado" id="telefono-empleado">
                                </div>
                                <button type="submit" id="button" class="btn btn-primary">Agregar empleado</button>
                            </form>
                </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Contennido de Reservaciones-->
        <div class="container">
            
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; pLibrary realizado por: Angel Hernandez</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
