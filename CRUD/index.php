<?php 
include 'header.php'; 
?>

<h2 class="text-center text-2xl font-semibold my-4">Lista de Empleados</h2>

<table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
    <thead>
        <tr class="bg-blue-500 text-white">
            <th class="py-2 px-4 border">ID</th>
            <th class="py-2 px-4 border">Nombre</th>
            <th class="py-2 px-4 border">Cargo</th>
            <th class="py-2 px-4 border">Salario</th>
            <th class="py-2 px-4 border">Fecha de Ingreso</th>
            <th class="py-2 px-4 border">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM empleados";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr class='text-center'>
                <td class='py-2 px-4 border'>{$row['id']}</td>
                <td class='py-2 px-4 border'>{$row['nombre']}</td>
                <td class='py-2 px-4 border'>{$row['cargo']}</td>
                <td class='py-2 px-4 border'>{$row['salario']}</td>
                <td class='py-2 px-4 border'>{$row['fecha_ingreso']}</td>
                <td class='py-2 px-4 border'>
                    <a href='update.php?id={$row['id']}' class='bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 rounded'>Editar</a>
                    <a href='delete.php?id={$row['id']}' class='bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded' onclick='return confirm(\"¿Seguro que deseas eliminar?\")'>Eliminar</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='6' class='py-2 px-4 text-center text-gray-500'>No hay empleados registrados.</td></tr>";
    }
    ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>
