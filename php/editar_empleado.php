<?php
require_once 'config.php';

// Obtén el ID del empleado de la URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Si el formulario ha sido enviado, actualiza el empleado en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_empleado = isset($_POST['nombre-empleado']) ? $_POST['nombre-empleado'] : '';
    $puesto_empleado = isset($_POST['puesto-empleado']) ? $_POST['puesto-empleado'] : '';
    $direccion_empleado = isset($_POST['direccion-empleado']) ? $_POST['direccion-empleado'] : '';
    $telefono_empleado = isset($_POST['telefono-empleado']) ? $_POST['telefono-empleado'] : '';

    $sql = "UPDATE empleados SET nombre = ?, puesto = ?, direccion = ?, telefono = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssi", $nombre_empleado, $puesto_empleado, $direccion_empleado, $telefono_empleado, $id);

    if($stmt->execute()){
        echo"<h1 style='text-align: center;'>Información del empleado actualizada exitosamente.</h1>";
        echo "<div class='d-flex justify-content-center mt-3'>";
        echo "<a href='/lunaDePlataResortphp/rhumanos.php' class='btn btn-success'>Regresar a Recursos Humanos</a>";
        echo "</div>";
    } else{
        echo "Algo salió mal. Por favor, intenta de nuevo.";
    }

    $stmt->close();
}

// Busca los datos del empleado en la base de datos
$result = $mysqli->query("SELECT * FROM empleados WHERE id = $id");

// Si se encontró el empleado, llena los campos del formulario con sus datos
if ($result->num_rows > 0) {
    $empleado = $result->fetch_assoc();
} else {
    die('No se encontró el empleado con el ID especificado.');
}
?>

<!-- Resto del código HTML... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/lunaDePlataResortphp/css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<div class="modal-body d-flex justify-content-center align-items-center">
<div class="section3 container">
<h1 style="text-align:center">Editar empleado</h1>
<div class="card mx-auto mt-5" style="width: 50%;">
<form method="post" id="form" action="" class="d-flex flex-column p-3" style="background-color: #96d1fb;">
    <div class="mb-3" >
        <label for="nombre-empleado" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre-empleado" id="nombre-empleado" value="<?php echo $empleado['nombre']; ?>">
    </div>

    <div class="mb-3">
        <p>Puesto del empleado</p>
        <select class="form-control" id="puesto-empleado" name="puesto-empleado">
            <option value="recepcionista" <?php echo $empleado['puesto'] == 'recepcionista' ? 'selected' : ''; ?>>Recepcionista</option>
            <option value="limpieza" <?php echo $empleado['puesto'] == 'limpieza' ? 'selected' : ''; ?>>Limpieza</option>
            <option value="cocina" <?php echo $empleado['puesto'] == 'cocina' ? 'selected' : ''; ?>>Cocina</option>
            <option value="mantenimiento" <?php echo $empleado['puesto'] == 'mantenimiento' ? 'selected' : ''; ?>>Mantenimiento</option>
            <option value="portero" <?php echo $empleado['puesto'] == 'portero' ? 'selected' : ''; ?>>Portero</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="direccion-empleado" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion-empleado" id="direccion-empleado" value="<?php echo $empleado['direccion']; ?>">
    </div>

    <div class="mb-3">
        <label for="telefono-empleado" class="form-label">Teléfono</label>
        <input type="text" class="form-control" name="telefono-empleado" id="telefono-empleado" value="<?php echo $empleado['telefono']; ?>">
    </div>
    <button type="submit" id="button" class="btn btn-success align-self-center">Guardar cambios</button>
    </form>
</div>
</div>
</div>
</body>
</html>