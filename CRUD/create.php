<?php include 'header.php'; ?>

<h2 class="text-center text-2xl font-semibold my-4">Agregar Empleado</h2>
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <form method="POST" action="">
        <label class="block text-gray-700">Nombre:</label>
        <input type="text" name="nombre" class="w-full px-4 py-2 border rounded mt-1 mb-3" required>

        <label class="block text-gray-700">Cargo:</label>
        <input type="text" name="cargo" class="w-full px-4 py-2 border rounded mt-1 mb-3" required>

        <label class="block text-gray-700">Salario:</label>
        <input type="number" name="salario" class="w-full px-4 py-2 border rounded mt-1 mb-3" required>

        <label class="block text-gray-700">Fecha de Ingreso:</label>
        <input type="date" name="fecha_ingreso" class="w-full px-4 py-2 border rounded mt-1 mb-3" required>

        <input type="submit" name="submit" value="Guardar" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $fecha_ingreso = $_POST['fecha_ingreso'];

    $sql = "INSERT INTO empleados (nombre, cargo, salario, fecha_ingreso) VALUES ('$nombre', '$cargo', '$salario', '$fecha_ingreso')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class='text-green-500 text-center mt-3'>Empleado agregado correctamente.</p>";
        header("Refresh: 2; url=index.php");
    } else {
        echo "<p class='text-red-500 text-center mt-3'>Error: " . $conn->error . "</p>";
    }
}
?>

<?php include 'footer.php'; ?>

