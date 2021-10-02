<?php
session_start();
include("functions/funciones.php");

if (isset($_SESSION['usu'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registro Propietario</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>

    <body>
        <div>
            <form action="registrar.php" method="post">
                <h1>Registro de Propietario</h1>
                <hr>

                <label for="rut">Ingrese Rut: </label><br>
                <input type="text" name="rut" id="rut"><br><br>

                <label for="nombre">Ingrese Nombre Completo: </label><br>
                <input type="text" name="nombre" id="nombre"><br><br>

                <label for="fecha_nacimiento">Ingrese Fecha de Nacimiento: </label><br>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br><br>

                <label for="correo">Ingrese Correo electrónico: </label><br>
                <input type="email" name="correo" id="correo"><br><br>

                <label for="clave">Ingrese Contraseña: </label><br>
                <input type="password" name="clave" id="clave"><br><br>

                <label for="sexo">Seleccione Sexo: </label><br><br>
                <select name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select><br><br>

                <label for="telefono">Ingrese Teléfono: </label><br>
                <input type="text" name="telefono" id="telefono"><br><br>

                <label for="usuario">Ingrese Nombre de Usuario: </label><br>
                <input type="text" name="usuario" id="usuario"><br><br>

                <label for="n_propiedad">Ingrese Número de Propiedad: </label><br>
                <input type="text" name="n_propiedad" id="n_propiedad"><br><br>

                <button type="submit" id="btn">Registrarme</button>
                <br><br>
                <a href="acceso_form.php">Volver Atrás</a>
            </form>
            <hr>
            <table>
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo</th>
                    <th>Sexo</th>
                    <th>Telefono</th>
                    <th>N° Propiedad</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                </tr>
                <?php
                $sql = "SELECT * FROM propietarios";
                $result = mysqli_query(conectar(), $sql);
                while ($datos = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $datos['rut']; ?></td>
                        <td><?php echo $datos['nombre']; ?></td>
                        <td><?php echo $datos['fecha_nacimiento']; ?></td>
                        <td><?php echo $datos['correo']; ?></td>
                        <td><?php echo $datos['sexo']; ?></td>
                        <td><?php echo $datos['telefono']; ?></td>
                        <td><?php echo $datos['n_propiedad']; ?></td>
                        <td><?php echo $datos['usuario']; ?></td>
                        <td><?php echo $datos['estado']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
