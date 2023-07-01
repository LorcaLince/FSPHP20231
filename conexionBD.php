<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
//conectar con el servidor
$conexion = mysqli_connect($servidor, $usuario, $clave);
mysqli_close($conexion);//cierra la conexión

$baseDatos = "tickets";
//seleccionar la base de datos
mysqli_select_db($conexion, $baseDatos);
