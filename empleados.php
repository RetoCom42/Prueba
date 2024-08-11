<!-- empleados.php -->
<?php
include 'db.php'; // Incluye el archivo de conexión

$query = "SELECT * FROM empleados";
$stmt = $conn->prepare($query);
$stmt->execute();

$empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($empleados) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Posición</th><th>Departamento</th></tr>";
    foreach ($empleados as $empleado) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($empleado['id']) . "</td>";
        echo "<td>" . htmlspecialchars($empleado['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($empleado['posicion']) . "</td>";
        echo "<td>" . htmlspecialchars($empleado['departamento']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron empleados.";
}
?>
