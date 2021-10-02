<!DOCTYPE html>
<html>

<head>
    <title>Registro Gestor</title>
    <link rel="stylesheet" type="text/css" href="">
</head>

<body>
    <div>
        <form action="" method="post">
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

            <label for="certificado">Ingrese Cetificado de Antecedentes: </label><br>
            <input type="file" name="certificado" id="certificado"><br><br>

            <button type="submit" id="btn">Registrarme</button>
            <br><br>
            <a href="acceso_form.php">Volver Atrás</a>
        </form>
    </div>
</body>

</html>