<?php

if (
    !isset($_POST["dominio"]) ||
    !isset($_POST["reino"]) ||
    !isset($_POST["phylum"]) ||
    !isset($_POST["clase"]) ||
    !isset($_POST["subclase"]) ||
    !isset($_POST["orden"]) ||
    !isset($_POST["familia"]) ||
    !isset($_POST["genero"]) ||
    !isset($_POST["especie"])
) {
    exit();
}

include_once "cmd_bd.php";
$id = $_POST["id"];
$dominio = $_POST["dominio"];
$reino = $_POST["reino"];
$phylum = $_POST["phylum"];
$clase = $_POST["clase"];
$subclase = $_POST["subclase"];
$orden = $_POST["orden"];
$familia = $_POST["familia"];
$genero = $_POST["genero"];
$especie = $_POST["especie"];

$sentencia = $bd_con->prepare("UPDATE public.tblcasoestudio SET cadominiogf=?, careinogf=?, caphylumgf=?, caclasegf=?, casubclasegf=?, caordengf=?, cafamiliagf=?, cagenerogf=?, caespeciegf=?, cafechareggf=CURRENT_DATE, cahorareggf=CURRENT_TIME WHERE cacodigoidgf = ?;");
$resultado = $sentencia->execute([$dominio, $reino, $phylum, $clase, $subclase, $orden, $familia, $genero, $especie, $id]);
if ($resultado === true) {
    header("Location: casos.php");
} else {
    echo "Error al actualizar datos. Verificar información";
}