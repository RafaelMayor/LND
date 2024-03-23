<?php
// Validar datos

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$marcaModelo = $_POST['marca_modelo'];
$matricula = $_POST['matricula'];
$tipoVehiculo = $_POST['tipo_vehiculo'];
$caracteristicas = $_POST['caracteristicas'];

// Validar nombre
if (empty($nombre)) {
  echo "<p>El nombre no puede estar vacío.</p>";
}

// Validar sexo
if (!isset($sexo)) {
  echo "<p>Debe seleccionar un sexo.</p>";
}

// Validar marca/modelo
if (empty($marcaModelo)) {
  echo "<p>La marca/modelo no puede estar vacía.</p>";
}

// Validar matrícula
if (empty($matricula)) {
  echo "<p>La matrícula no puede estar vacía.</p>";
}

// Validar tipo de vehículo
if (!isset($tipoVehiculo)) {
  echo "<p>Debe seleccionar un tipo de vehículo.</p>";
}

// Si no hay errores, mostrar los datos

if (!empty($nombre) && isset($sexo) && !empty($marcaModelo) && !empty($matricula) && isset($tipoVehiculo)) {
  echo "<h3>Datos del propietario</h3>";
  echo "<p>Nombre: $nombre</p>";
  echo "<p>Sexo: $sexo</p>";

  echo "<h3>Datos del vehículo</h3>";
  echo "<p>Marca/modelo: $marcaModelo</p>";
  echo "<p>Matrícula: $matricula</p>";
  echo "<p>Tipo de vehículo: $tipoVehiculo</p>";

  echo "<h3>Características</h3>";
  echo "<ul>";
  foreach ($caracteristicas as $caracteristica) {
    echo "<li>$caracteristica</li>";
  }
  echo "</ul>";
}

$email = $_POST['email'];
$asunto = "Datos del formulario";
$mensaje = "Nombre: " . $_POST['nombre'] . "\n";
$mensaje .= "Sexo: " . $_POST['sexo'] . "\n";
$mensaje .= "Marca/modelo: " . $_POST['marca_modelo'] . "\n";
$mensaje .= "Matrícula: " . $_POST['matricula'] . "\n";
$mensaje .= "Tipo de vehículo: " . $_POST['tipo_vehiculo'] . "\n";
$mensaje .= "\nCaracterísticas:\n";
foreach ($_POST['caracteristicas'] as $caracteristica) {
  $mensaje .= "- $caracteristica\n";
}

mail($email, $asunto, $mensaje);

?>
