<?php
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "cmd_bd.php";
$sentencia = $bd_con->prepare("DELETE FROM tblcasoestudio WHERE cacodigoidgf = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: casos.php");
} else {
    echo "Error al intentar ejecutar acción, datos relacionados";
}
