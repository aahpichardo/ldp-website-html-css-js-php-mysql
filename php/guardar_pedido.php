<?php
require_once 'config.php';

// Recoger los datos del formulario
$nombre = isset($_POST['nombre-cliente-pedido']) ? $_POST['nombre-cliente-pedido'] : '';
$fecha_pedido = isset($_POST['fecha-pedido']) ? $_POST['fecha-pedido'] : '';
$platillo = isset($_POST['platillo']) ? $_POST['platillo'] : '';
$bebida = isset($_POST['bebida']) ? $_POST['bebida'] : '';
$postre = isset($_POST['postre']) ? $_POST['postre'] : '';
$costo_total = 0;
$pedido = $platillo . ", " . $bebida . ", " . $postre;

// Calcular el costo total
switch ($platillo) {
    case 'filete':
        $costo_total += 500;
        break;
    case 'salmon':
        $costo_total += 1000;
        break;
    default:
        break;
}

switch ($bebida) {
    case 'limonada':
        $costo_total += 100;
        break;
    case 'vino':
        $costo_total += 300;
        break;
    default:
        break;
}

switch ($postre) {
    case 'tiramisu':
        $costo_total += 400;
        break;
    case 'souffle':
        $costo_total += 800;
        break;
    default:
        break;
}


// Preparar la consulta SQL
$sql = "INSERT INTO restaurante (nombre_cliente, fecha, platillos, costo_total) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sssi", $nombre, $fecha_pedido, $pedido, $costo_total);

// Ejecutar la consulta
if($stmt->execute()){
    echo "<h1 style='text-align: center;'>Pedido registrado exitosamente.</h1>";
    echo "<div class='d-flex justify-content-center mt-3'>";
    echo "<a href='/lunaDePlataResortphp/restaurante.php' class='btn btn-success'>Volver al inicio</a>";
    echo "</div>";
} else{
    echo "Algo salió mal. Por favor, intenta de nuevo.";
}

$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/lunaDePlataResortphp/css/styles.css" rel="stylesheet" />
    <title>Reservacion exitosa</title>
</head>
<body>
    
</body>
</html>