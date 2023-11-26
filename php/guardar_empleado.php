<?php
require_once 'config.php';

// Recoger los datos del formulario
$nombre_empleado = isset($_POST['nombre-empleado']) ? $_POST['nombre-empleado'] : '';
$puesto_empleado = isset($_POST['puesto-empleado']) ? $_POST['puesto-empleado'] : '';
$direccion_empleado = isset($_POST['direccion-empleado']) ? $_POST['direccion-empleado'] : '';
$telefono_empleado = isset($_POST['telefono-empleado']) ? $_POST['telefono-empleado'] : '';



// Preparar la consulta SQL
$sql = "INSERT INTO empleados (nombre, puesto, direccion, telefono) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $nombre_empleado, $puesto_empleado, $direccion_empleado, $telefono_empleado);

// Ejecutar la consulta
if($stmt->execute()){
    echo"<h1>Empleado registrado exitosamente.</h1>";
    echo "<br><a href='/lunaDePlataResortphp/rhumanos.php'><button>Volver al inicio</button></a>"; // Asegúrate de que 'index.php' sea la página de inicio de tu sitio web
} else{
    echo "Algo salió mal. Por favor, intenta de nuevo.";
}

$stmt->close();

?>