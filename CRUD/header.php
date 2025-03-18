<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white py-4 text-center text-2xl font-bold">
        Gestión de Empleados
        <nav class="mt-2">
            <a href="index.php" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded">Inicio</a>
            <a href="create.php" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded">Agregar Empleado</a>
        </nav>
    </header>
    <div class="container mx-auto p-6">
