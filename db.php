<?php
// db.php - Connexion à la base de données SQLite
try {
    $pdo = new PDO('sqlite:./UX.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(['error' => 'La connexion à la base de données a échoué : ' . $e->getMessage()]));
}
?>
