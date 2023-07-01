<?php include("menu.php"); ?>
    <main>
        <div class="container col-lg-4 text-center my-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Ticket</th>
                    </tr>
                </thead>
                <tbody>
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
                
                $sql = "SELECT * FROM compra_tickets";
                $consulta = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($consulta) > 0) {

                while($fila = mysqli_fetch_assoc($consulta)) {
                    echo "<tr>
                        <td>" . $fila["id"] . "</td>
                        <td>" . $fila["nombre"]."</td>
                        <td>" . $fila["apellido"]. "</td>
                        <td>" . $fila["email"]. "</td>
                        <td>" . $fila["cantidad"]. "</td>
                        <td>" . $fila["categoria"]. "</td>
                    </tr>";
                }
            }
                ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php include("footer.php") ;?>