<?php

session_start();

include("functions/funciones.php");

$sql = "SELECT * FROM propietarios WHERE usuario = '" . $_POST['usuario'] . "' and clave = '" . $_POST['clave'] . "'";
$result = mysqli_query(conectar(), $sql);
$datos = mysqli_fetch_array($result);

$cont = mysqli_num_rows($result);

if ($cont != 0) {
    $_SESSION['usu'] = $datos['nombre'];
    header("Location:principal.php");
} else {
    header("Location:inicio.php");
}
