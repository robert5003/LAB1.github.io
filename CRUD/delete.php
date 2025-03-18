<?php include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM empleados WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado correctamente.";
        header("Refresh: 2; url=index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
