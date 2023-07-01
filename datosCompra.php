<?php

echo "<p>En archivo datosCompra.php<p>";

print_r($_POST);
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

echo $nombre . $apellido;

include("conexionBD.php");

//$sql = "SELECT * FROM compra_tickets";
//ejecutar la consulta
$sql = "INSERT INTO compra_tickets  VALUES(NULL,'$nombre', '$apellido','$email','$cantidad','$categoria')";
$consulta = mysqli_query($conexion, $sql);