<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recrusos Humanos - Luna de Plata</title>
        <link rel="icon" type="image/x-icon" href="img/icono.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"  style="background-color: #96d1fb;"href="#tabla-con-empleados">Recursos Humanos</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"   style="background-color: #96d1fb;"href="#tabla-con-reservaciones">Reservaciones</a>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5"  style="background-color: #96d1fb;"href="#tabla-con-pedidos">Restaurante</a>
            </div>
        </header>
        
        <!-- Contennido de Empleados-->
        <div class="container" id="tabla-con-empleados">
            <div class="container mt-4">
                <h2>Tabla de Empleados</h2>
                <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#nuevoEmpleado">Registrar nuevo empleado</a>
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
                        <button class='btn btn-warning me-3'><i class='bi bi-pencil-fill'></i></button>
                        </button>
                        <button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>
                      </td>
                    </tr>
                    <?php
                          require_once 'php/config.php';

                          if (isset($_POST['id_to_delete_empleados'])) {
                            $id_to_delete = $_POST['id_to_delete_empleados'];
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
                              
                              echo "<div class='d-flex'>";
                              echo "<a href='php/editar_empleado.php?id=" . $row['id'] . "' class='btn btn-warning me-3'><i class='bi bi-pencil-fill'></i></a>";
                              
                              echo "<form method='POST'>";
                              echo "<input type='hidden' name='id_to_delete_empleados' value='" . $row['id'] . "'>";
                              echo "<button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>";
                              echo "</form>";
                              echo "</div>";
                              echo "</td>";
                              echo "</tr>";
                          }
                        ?>
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
                            <form method="post" id="form" action="php/guardar_empleado.php">
                                <div class="mb-3">
                                    <label for="nombre-empleado" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre-empleado" id="nombre-empleado">
                                </div>
                        
                                <div class="mb-3">
                                    <p>Puesto del empleado</p>
                                    <select class="form-control" id="puesto-empleado" name="puesto-empleado">
                                        <option value="recepcionista">Recepcionista</option>
                                        <option value="limpieza">Limpieza</option>
                                        <option value="cocina">Cocina</option>
                                        <option value="mantenimiento">Mantenimiento</option>
                                        <option value="portero">Portero</option>
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
                                <button type="submit" id="button" class="btn btn-success">Agregar empleado</button>
                            </form>
                </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Contennido de Reservaciones-->
        <div class="container">
            
        </div>
        
            <!--RESERVACIONES-->
            <div class="container mt-4" id="tabla-con-reservaciones">
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
                        <button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>
                        </td>
                      </tr>
                        <?php
                          require_once 'php/config.php';

                          if (isset($_POST['id_to_delete_reservaciones'])) {
                            $id_to_delete = $_POST['id_to_delete_reservaciones'];
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
                              echo "<form method='POST'>";
                              echo "<input type='hidden' name='id_to_delete_reservaciones' value='" . $row['id_cliente'] . "'>";
                              echo "<button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>";
                              echo "</form>";
                              echo "</td>";
                              echo "</tr>";
                          }
                        ?>
                    </tbody>
                  </table>
            </div>
        </div>
        

        <!-- Contenido de Restaurante-->
        <div class="container" id="tabla-con-pedidos">
            <p>pedidos restaurante</p>
            <div class="container mt-4">
                <h2>Tabla de Pedidos</h2>
                
                <!-- Agrega la clase 'table' de Bootstrap para estilos de tabla -->
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>id</th>
                      <th>Nombre del Cliente</th>
                      <th>Fecha del Pedido</th>
                      <th>Pedido</th>
                      <th>Costo Total</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Cliente 1</td>
                      <td>2023-11-22</td>
                      <td>Producto A, Producto B</td>
                      <td>$100.00</td>
                      <td>
                      <button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>
                      </td>
                    </tr>
                    <?php
                          require_once 'php/config.php';

                          if (isset($_POST['id_to_delete'])) {
                            $id_to_delete = $_POST['id_to_delete'];
                            $mysqli->query("DELETE FROM restaurante WHERE id = $id_to_delete");
                          }
                        
                          $result = $mysqli->query('SELECT * FROM restaurante');

                          while ($row = $result->fetch_assoc())
                          {
                              echo "<tr>";
                              echo "<th>" . $row['id'] . "</th>";
                              echo "<td>" . $row['nombre_cliente'] . "</td>";
                              echo "<td>" . $row['fecha'] . "</td>";
                              echo "<td>" . $row['platillos'] . "</td>";
                              echo "<td>" . $row['costo_total'] . "</td>";
                              echo "<td>";
                              echo "<form method='POST'>";
                              echo "<input type='hidden' name='id_to_delete' value='" . $row['id'] . "'>";
                              echo "<button type='submit' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button>";
                              echo "</form>";
                              echo "</td>";
                              echo "</tr>";
                          }
                        ?>
                  </tbody>
                </table>
              </div>
        </div>

        <!-- Contennido de Reservaciones-->
        <div class="container">
            
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Luna de Plata Resort elaborado por Angel Hernandez</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
