<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Agregar Usuario</h1>
        <form action="process_add_user.php" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <label for="destacamento">Destacamento:</label>
            <select id="destacamento" name="destacamento" required>
                <option value="Destacamento 1">Destacamento 1</option>
                <option value="Destacamento 2">Destacamento 2</option>
                <option value="Destacamento 3">Destacamento 3</option>
                <option value="Destacamento 4">Destacamento 4</option>
                <option value="Destacamento 5">Destacamento 5</option>
                <option value="Plana Mayor">Plana Mayor</option>
            </select>
            <button type="submit">Agregar Usuario</button>
        </form>
    </div>
</body>
</html>
