<?php
include 'db.php';

$users = [
    ['username' => 'user1', 'password' => password_hash('password1', PASSWORD_DEFAULT), 'destacamento' => 'Destacamento 1'],
    ['username' => 'user2', 'password' => password_hash('password2', PASSWORD_DEFAULT), 'destacamento' => 'Destacamento 2'],
    ['username' => 'user3', 'password' => password_hash('password3', PASSWORD_DEFAULT), 'destacamento' => 'Destacamento 3'],
    ['username' => 'user4', 'password' => password_hash('password4', PASSWORD_DEFAULT), 'destacamento' => 'Destacamento 4'],
    ['username' => 'user5', 'password' => password_hash('password5', PASSWORD_DEFAULT), 'destacamento' => 'Destacamento 5'],
    ['username' => 'user6', 'password' => password_hash('password6', PASSWORD_DEFAULT), 'destacamento' => 'Plana Mayor']
];

foreach ($users as $user) {
    $sql = "INSERT INTO users (username, password, destacamento) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user['username'], $user['password'], $user['destacamento']]);
}

echo "Usuarios insertados correctamente.";
?>
