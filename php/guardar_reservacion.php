<?php

require_once 'config.php';
require_once 'tcpdf/tcpdf.php'; // Asegúrate de que esta ruta apunte al archivo tcpdf.php

// Recoger los datos del formulario
$nombre = isset($_POST['nombre-persona-reservacion']) ? $_POST['nombre-persona-reservacion'] : '';
$numero_personas = isset($_POST['numero-personas-reservacion']) ? $_POST['numero-personas-reservacion'] : '';
$fecha_entrada = isset($_POST['fecha-llegada-reservacion']) ? $_POST['fecha-llegada-reservacion'] : '';
$fecha_salida = isset($_POST['fecha-salida-reservacion']) ? $_POST['fecha-salida-reservacion'] : '';
$tipo_habitacion = isset($_POST['tipo-habitacion-reservacion']) ? $_POST['tipo-habitacion-reservacion'] : '';
$costo_total = 0;

switch($tipo_habitacion){
    case "plata":
        $costo_total = 1500 + ($numero_personas * 300);
        break;
    case "plataPlus":
        $costo_total = 2000 + ($numero_personas * 600); // corregido typo en $numpero_personas
        break;
}

// Preparar la consulta SQL
$sql = "INSERT INTO reservaciones (nombre, numero_personas, fecha_entrada, fecha_salida, tipo_habitacion, costo_total) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sisssi", $nombre, $numero_personas, $fecha_entrada, $fecha_salida, $tipo_habitacion, $costo_total);

// Ejecutar la consulta
if($stmt->execute()){
    // Crear una nueva instancia de TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Configurar el documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Luna de Plata Resort');
    $pdf->SetTitle('Reservación');

    // Añadir una página
    $pdf->AddPage();

    // Escribir los datos de la reservación en el PDF
    $pdf->SetFont('helvetica', '', 20); // Establece la fuente a Helvetica, normal, tamaño 20

    $pdf->Cell(0, 0, "Nombre: $nombre", 0, 1, 'C'); // El tercer argumento es la alineación, 'C' para centrar
    $pdf->Cell(0, 0, "Número de personas: $numero_personas", 0, 1, 'C');
    $pdf->Cell(0, 0, "Fecha de entrada: $fecha_entrada", 0, 1, 'C');
    $pdf->Cell(0, 0, "Fecha de salida: $fecha_salida", 0, 1, 'C');
    $pdf->Cell(0, 0, "Tipo de habitación: $tipo_habitacion", 0, 1, 'C');
    $pdf->Cell(0, 0, "Costo total: $costo_total", 0, 1, 'C');

    // Guardar el PDF en un archivo
    $pdf->Output('C:\Users\German\Downloads\reservacion.pdf', 'F'); //aqui pongo la ruta donde se guardara el pdf
    echo "<br><a href='/lunaDePlataResortphp/index.php'><button>Volver al inicio</button></a>"; // Asegúrate de que 'index.php' sea la página de inicio de tu sitio web
} else{
    echo "Algo salió mal. Por favor, intenta de nuevo.";
}

$stmt->close();

?>