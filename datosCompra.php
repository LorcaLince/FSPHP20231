<?php

echo "<p>En archivo datosCompra.php<p>";

print_r($_POST);
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

echo $nombre . $apellido;

$servidor = "localhost";
$usuario = "root";
$clave = "";
//conectar con el servidor
$conexion = mysqli_connect($servidor, $usuario, $clave);
mysqli_close($conexion);//cierra la conexión

$baseDatos = "tickets";
//seleccionar la base de datos
mysqli_select_db($conexion, $baseDatos);

//$sql = "SELECT * FROM compra_tickets";
//ejecutar la consulta
$sql = "INSERT INTO compra_tickets  VALUES(NULL,'$nombre', '$apellido','$email','$cantidad','$categoria')";
$consulta = mysqli_query($conexion, $sql);