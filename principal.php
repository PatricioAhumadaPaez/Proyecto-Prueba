<?php
session_start();

if (isset($_SESSION['usu'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Principal</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>

    <body>
        <div id="">
            <h4>Bienvenido Usuario: <?php echo strtoupper($_SESSION['usu']); ?></h4><br>

            <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
