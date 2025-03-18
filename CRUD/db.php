<?php
$host = "localhost";
$user = "root";
$password = ""; // Deja esto vacío si usas XAMPP
$database = "empleados_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
