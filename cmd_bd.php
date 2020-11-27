<?php
$passwd = "12345";
$user = "postgres";
$db_name = "t02";
$server = "localhost";
$port_ac = "5432";
try {
    $bd_con = new PDO("pgsql:host=$server;port=$port_ac;dbname=$db_name", $user, $passwd);
    $bd_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
}
