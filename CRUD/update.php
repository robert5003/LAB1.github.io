<?php include 'header.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM empleados WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $fecha_ingreso = $_POST['fecha_ingreso'];

    $sql = "UPDATE empleados SET nombre='$nombre', cargo='$cargo', salario='$salario', fecha_ingreso='$fecha_ingreso' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado actualizado correctamente.";
        header("Refresh: 2; url=index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Editar Empleado</h2>
<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>

    <label>Cargo:</label>
    <input type="text" name="cargo" value="<?php echo $row['cargo']; ?>" required><br>

    <label>Salario:</label>
    <input type="number" name="salario" value="<?php echo $row['salario']; ?>" required><br>

    <label>Fecha de Ingreso:</label>
    <input type="date" name="fecha_ingreso" value="<?php echo $row['fecha_ingreso']; ?>" required><br>

    <input type="submit" name="update" value="Actualizar">
</form>

<?php include 'footer.php'; ?>
